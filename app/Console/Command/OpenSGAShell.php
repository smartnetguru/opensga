<?php
class OpenSGAShell extends AppShell {
    
    public function main() {
        $this->out('Hello world.');
    }
    
    public function teste(){
        $this->out('Teste');
        App::uses();
        $this->log('Teste de Shell Efectuado com Sucesso');
    }
}