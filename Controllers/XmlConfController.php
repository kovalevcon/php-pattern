<?php
declare(strict_types=1);
namespace Controllers;

use Exception;
use Exceptions\{ConfException, FileException, XmlException};
use Models\XmlConf;

/**
 * Class XmlConfController
 *
 * @package Controllers
 */
class XmlConfController
{
    /**
     * Get and set value for XmlConf
     *
     * @return void
     */
    public function getAndSetXmlConf(): void
    {
        try {
            print("Start of work");
            /** @var XmlConf $conf */
            $conf = new XmlConf(__DIR__ . '/../Tools/XmlConf.xml');
            print("user: {$conf->get('user')}\n");
            print("host: {$conf->get('host')}\n");
            $conf->set('pass', 'newpass' . random_int(0, 999));
            $conf->write();
        } catch (FileException $e) {
            print("FileException: {$e->getMessage()}");
        } catch (XmlException $e) {
            print("XmlException: {$e->getMessage()}");
        } catch (ConfException $e) {
            print("ConfException: {$e->getMessage()}");
        } catch (Exception $e) {
            print("Exception: {$e->__toString()}");
        } finally {
            print("End of work");
        }
    }
}
