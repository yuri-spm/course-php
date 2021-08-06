<?php

namespace CoffeeCode\Uploader;

/**
 * Class CoffeeCode Send
 *
 * @author Robson V. Leite <https://github.com/robsonvleite>
 * @package CoffeeCode\Uploader
 */
class Send extends Uploader
{
    /**
     * Send constructor.
     *
     * @param string $uploadDir
     * @param string $fileTypeDir
     * @param array $allowTypes
<<<<<<< HEAD
     * @param array $extensions
     * @param bool $monthYearPath
     * https://www.freeformatter.com/mime-types-list.html
     */
    public function __construct(
        string $uploadDir,
        string $fileTypeDir,
        array $allowTypes,
        array $extensions,
        bool $monthYearPath = true
    ) {
        parent::__construct($uploadDir, $fileTypeDir, $monthYearPath);
        self::$allowTypes = $allowTypes;
        self::$extensions = $extensions;
=======
     */
    public function __construct(string $uploadDir, string $fileTypeDir, array $allowTypes)
    {
        parent::__construct($uploadDir, $fileTypeDir);
        self::$allowTypes = $allowTypes;
>>>>>>> 7de010e53e6c2059a02563df32edb53c805e113c
    }

    /**
     * @param array $file
     * @param string $name
     * @return string
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
=======
        if (!in_array($file['type'], static::$allowTypes)) {
            throw new \Exception("{$file['type']} - Not a valid file type");
        } else {
            $this->ext = mb_strtolower(pathinfo($file['name'])['extension']);
            $this->name($name);
        }

>>>>>>> 7de010e53e6c2059a02563df32edb53c805e113c
        move_uploaded_file($file['tmp_name'], "{$this->path}/{$this->name}");
        return "{$this->path}/{$this->name}";
    }
}