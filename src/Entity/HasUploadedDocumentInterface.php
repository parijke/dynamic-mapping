<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

interface HasUploadedDocumentInterface
{
    public function addUploadedDocument(UploadedDocument $uploadedDocument);

    /**
     * @param UploadedDocument $uploadedDocument
     * @return mixed
     */
    public function removeUploadedDocument(UploadedDocument $uploadedDocument);

    /**
     * @return mixed
     */
    public function getUploadedDocuments();

    /**
     * @param ArrayCollection $uploadedDocuments
     * @return mixed
     */
    public function setUploadedDocuments(ArrayCollection $uploadedDocuments);

}