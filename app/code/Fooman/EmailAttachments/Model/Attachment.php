<?php

namespace Fooman\EmailAttachments\Model;

class Attachment implements Api\AttachmentInterface
{

    protected $content;
    protected $mimeType;
    protected $filename;
    protected $disposition;
    protected $encoding;

    public function __construct(
        $content,
        $mimeType,
        $fileName,
        $disposition = \Zend_Mime::DISPOSITION_ATTACHMENT,
        $encoding = \Zend_Mime::ENCODING_BASE64
    ) {
        $this->content = $content;
        $this->mimeType = $mimeType;
        $this->filename = $fileName;
        $this->disposition = $disposition;
        $this->encoding = $encoding;
    }

    /**
     * @return mixed
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @return string
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }


}
