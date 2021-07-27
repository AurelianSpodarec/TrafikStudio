<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Section extends Component
{

    public $children;
    public $class;

    public $container = [
        'fluid'   => 'container--fluid',
        'xs'      => 'container container--xs',
        'sm'      => 'tf-container tf-container--sm',
        'default' => 'container',
        'lg'      => 'tf-container tf-container--lg'
    ];

    public $bgColor = [
        'default'   => '',
        'white'     => 'bg-white',
        'gray'      => 'bg-gray-50',
        'dark'      => 'bg-gray-900',

        'primary'   => '',
        'secondary' => '',
        'teritary'  => '',
        // 'gray'     =>  'bg-gray-50',
    ];

    public $paddingTop = [
        'none'    => 'pt-0',
        'xs'      => '',
        'sm'      => '',
        'default' => 'pt-8 md:pt-24',
        'lg'      => '',
        'xl'      => 'pt-8 md:pt-44'
    ];

    public $paddingBottom = [
        'none'    => 'pb-0',
        'xs'      => 'pb-4 md:pb-8',
        'sm'      => 'pb-6 md:pb-16',
        'default' => 'pb-8 md:pb-24',
        'lg'      => '',
        'xl'      => ''
    ]; 


    public function __construct(
        $bgColor = 'default',
        $container = 'default',
        $paddingTop = null,
        $paddingBottom = null,
        $class = null, 
        $message = null
    ) {
        $this->bgColor = $this->bgColor[$bgColor] ?? $this->bgColor['default'];
        $this->container = $this->container[$container] ?? $this->container['default'];
        $this->paddingTop = $this->paddingTop[$paddingTop] ?? $this->paddingTop['none'];
        $this->paddingBottom = $this->paddingBottom[$paddingBottom] ?? $this->paddingBottom['none'];
 
        $this->class = $class;
        $this->message = $message;
    }


    public function render()
    {
        return $this->view('components.section');
    }
}

 