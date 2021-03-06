<?php
/**
 * Interface IAdapter
 * @project         <The PHP 7 Grid-Data Library>
 * @package         gdgrid/gd
 * @license         MIT License
 * @copyright       Copyright (c) 2018, GD Lab
 * @author          GD Lab <dev.gdgrid@gmail.com>
 * @author-website  <>
 * @project-website <>
 * @github          https://github.com/gdgrid/gd
 */

namespace gdgrid\gd\bundle
{
    interface IConnector
    {
        public function init();

        public function attachAdapter(Adapter $adapter): IConnector;
    
        public function adapter(): Adapter;
    }
}
