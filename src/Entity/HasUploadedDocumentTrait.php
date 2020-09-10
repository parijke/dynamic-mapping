<?php

namespace App\Entity;

// src/Acme/DemoBundle/Entity/HasUploadedDocumentTrait
use Doctrine\Common\Collections\ArrayCollection;

trait HasUploadedDocumentTrait {

    /**
     * @var ArrayCollection
     */

protected $uploadedDocuments;

    public function addUploadedDocument(UploadedDocument $uploadedDocument)
    {
        $this->uploadedDocuments->add($uploadedDocument);

        return $this;
    }

    public function removeUploadedDocument(UploadedDocument $uploadedDocument)
    {
        $this->uploadedDocuments->removeElement($uploadedDocument);
    }

    public function getUploadedDocuments()
    {
        return $this->uploadedDocuments;
    }

    public function setUploadedDocuments(ArrayCollection $uploadedDocuments)
    {
        $this->uploadedDocuments = $uploadedDocuments;

        return $this;
    }

}