<?php

namespace Protobuf\Compiler;

/**
 * Options given in the command line
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class Options
{

    /**
     * @var string[]
     */
    protected $psr4;

    /**
     * @var string
     */
    protected $package;

    /**
     * @var bool
     */
    protected $verbose = false;

    /**
     * @var bool
     */
    protected $skipImported = false;

    /**
     * @return string
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @return string
     */
    public function getVerbose()
    {
        return $this->verbose;
    }

    /**
     * @return bool
     */
    public function getSkipImported()
    {
        return $this->skipImported;
    }

    /**
     * @return array
     */
    public function getPsr4()
    {
        return $this->psr4;
    }

    /**
     * @param array $params
     *
     * @return \Protobuf\Compiler\Generator\Options
     */
    public static function fromArray(array $params)
    {
        $options = new Options();

        if (isset($params['verbose'])) {
            $options->verbose = (bool) $params['verbose'];
        }

        if (isset($params['package'])) {
            $options->package = trim($params['package']);
        }

        if (isset($params['skip-imported'])) {
            $options->skipImported = (bool) $params['skip-imported'];
        }

        if (isset($params['psr4'])) {
            $options->psr4 = $params['psr4'];
        }

        return $options;
    }
}