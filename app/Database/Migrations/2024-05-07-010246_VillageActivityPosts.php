<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class VillageActivityPosts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'category_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'content' => [
                'type' => 'TEXT',
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('category_id', 'village_activity_categories', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('village_activity_posts');
    }

    public function down()
    {
        $this->forge->dropTable('village_activity_posts');
    }
}
