<?php

namespace AppBundle\Compta\Importer;

interface Importer
{
    /**
     * @param string $filePath
     * @return void
     */
    public function initialize($filePath);

    /**
     * @return boolean
     */
    public function validate();

    /**
     * @return mixed
     */
    public function extract();

}
