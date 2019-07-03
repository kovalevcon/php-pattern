<?php
declare(strict_types=1);
namespace Models;

use Exceptions\{ConfException, FileException, XmlException};

/**
 * Class XmlConf
 *
 * @package Models
 */
class XmlConf
{
    /** @var string $file */
    private $file;
    /** @var \SimpleXMLElement $xml */
    private $xml;
    /** @var array $lastMatch */
    private $lastMatch = [];

    /**
     * XmlConf constructor.
     *
     * @param string $file
     * @throws FileException
     * @throws XmlException
     * @throws ConfException
     */
    public function __construct(string $file)
    {
        if (!file_exists($file)) {
            throw new FileException("File {$file} not found");
        }
        $this->file = $file;
        $this->xml = simplexml_load_file($file, null, LIBXML_NOERROR);
        if (!is_object($this->xml)) {
            throw new XmlException(libxml_get_last_error());
        }
        if (!count($this->xml->xpath('/conf'))) {
            throw new ConfException('Root element `conf` not found.');
        }
    }

    /**
     * Write xml object to file
     *
     * @throws \Exception
     * @return void
     */
    public function write(): void
    {
        if (!is_writable($this->file)) {
            throw new FileException("File {$this->file} not allow to write");
        }
        file_put_contents($this->file, $this->xml->asXML());
    }

    /**
     * Get item value by name
     *
     * @param string $name
     * @return string|null
     */
    public function get(string $name): ?string
    {
        $matches = $this->xml->xpath("/conf/item[@name=\"$name\"]");
        if (count($matches)) {
            $this->lastMatch = $matches[0];
            return (string)$matches[0];
        }

        return null;
    }

    /**
     * Set new item with key and value
     *
     * @param string $key
     * @param string $value
     */
    public function set(string $key, string $value): void
    {
        if (!is_null($this->get($key))) {
            $this->lastMatch[0] = $value;
            return;
        }
        $this->xml->conf->addChild('item', $value)->addAttribute('name', $key);
    }
}
