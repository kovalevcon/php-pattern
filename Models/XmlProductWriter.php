<?php
declare(strict_types=1);
namespace Models;

use XMLWriter;

/**
 * Class XmlProductWriter
 *
 * @package Models
 */
class XmlProductWriter extends ShopProductWriterAbstract
{
    /**
     * @inheritDoc
     */
    public function write(): void
    {
        /** @var XMLWriter $writer */
        $writer = new XMLWriter;
        $writer->openMemory();
        $writer->startDocument('1.0', 'UTF-8');
        $writer->startElement('products');

        foreach ($this->products as $product) {
            /** @var ShopProductParent $product */
            $writer->startElement('product');
            $writer->writeAttribute('title', $product->getTitle());
            $writer->startElement('summary');
            $writer->text($product->getSummaryLine());
            $writer->endElement(); // end of summary
            $writer->endElement(); // end of product
        }
        $writer->endElement(); // end of products
        $writer->endDocument();
        print $writer->flush();
    }
}
