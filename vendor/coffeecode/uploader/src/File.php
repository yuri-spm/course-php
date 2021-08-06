<?php

namespace CoffeeCode\Uploader;

/**
 * Class CoffeeCode File
 *
 * @author Robson V. Leite <https://github.com/robsonvleite>
 * @package CoffeeCode\Uploader
 */
class File extends Uploader
{
    /**
<<<<<<< HEAD
     * Allow zip, rar, bzip, pdf, doc, docx, csv, xls, xlsx, ods, odt files
     * @var array allowed file types
     * https://www.freeformatter.com/mime-types-list.html
=======
     * Allow zip, rar, bzip, pdf, doc, docx files
     * @var array allowed file types
>>>>>>> 7de010e53e6c2059a02563df32edb53c805e113c
     */
    protected static $allowTypes = [
        "application/zip",
        'application/x-rar-compressed',
        'application/x-bzip',
        "application/pdf",
        "application/msword",
        "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
<<<<<<< HEAD
        "text/csv",
        "application/vnd.ms-excel",
        "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
        "application/vnd.oasis.opendocument.spreadsheet",
        "application/vnd.oasis.opendocument.text",
    ];

    /**
     * Allowed extensions to types.
     * @var array
     */
    protected static $extensions = [
        "zip",
        "rar",
        "bz",
        "pdf",
        "doc",
        "docx",
        "csv",
        "xls",
        "xlsx",
        "ods",
        "odt"
=======
>>>>>>> 7de010e53e6c2059a02563df32edb53c805e113c
    ];

    /**
     * @param array $file
     * @param string $name
     * @return null|string
     * @throws \Exception
     */
    public function upload(array $file, string $name): string
    {
<<<<<<< HEAD
        $this->ext = mb_strtolower(pathinfo($file['name'])['extension']);

        if (!in_array($file['type'], static::$allowTypes) || !in_array($this->ext, static::$extensions)) {
            throw new \Exception("Not a valid file type or extension");
        }

        $this->name($name);
        move_uploaded_file($file['tmp_name'], "{$this->path}/{$this->name}");
        return "{$this->path}/{$this->name}";
    }
}
=======
        if (!in_array($file['type'], static::$allowTypes)) {
            throw new \Exception("{$file['type']} - Not a valid file type");
        } else {
            $this->ext = mb_strtolower(pathinfo($file['name'])['extension']);
            $this->name($name);
        }

        move_uploaded_file($file['tmp_name'], "{$this->path}/{$this->name}");
        return "{$this->path}/{$this->name}";
    }
}
>>>>>>> 7de010e53e6c2059a02563df32edb53c805e113c
