<?php

namespace Miarra\Calculator\DI;

use Nette\DI\CompilerExtension;

/**
 * Description of Calculator
 */
class CalculatorExtension extends CompilerExtension {
    
    private $defaults = [
        'countAsInt' => true
    ];
  
    
    public function loadConfiguration() {
        $builder = $this->getContainerBuilder();
        
        $this->validateConfig($this->defaults);        
        
        $this->compiler->loadDefinitions(
            $builder,
            $this->loadFromFile(__DIR__ . '/config.neon')['services'],
            $this->name
        );
        
        $builder->getDefinition($this->prefix('calculator'))
                ->addSetup('setCountAsInt', [$this->config['countAsInt']]);
    }
    
    public function beforeCompile(): void {
        parent::beforeCompile();
    }
}
