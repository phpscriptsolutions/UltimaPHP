<?php
/**
 * Ultima PHP - OpenSource Ultima Online Server written in PHP
 * Version: 0.1 - Pre Alpha
 */
class TypeArmor extends Object {
	public function typeStart() {
        $this->equiped = false;
        $this->layer   = LayersDefs::INNER_TORSO;
    }
}