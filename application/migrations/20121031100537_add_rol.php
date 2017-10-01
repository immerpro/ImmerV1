<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Rol extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'rol_id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'tipoRol' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '45',
                        ),
                        
                ));
                $this->dbforge->add_key('rol_id', TRUE);
                $this->dbforge->create_table('rol');
        }

        public function down()
        {
                $this->dbforge->drop_table('rol');
        }
}