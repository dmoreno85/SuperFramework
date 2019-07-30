<?php

use Phinx\Migration\AbstractMigration;

class CreatePost extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $post= $this->table('post');
        $post->addColumn('titulo','string',['limit'=>80]);
        $post->addColumn('descripcion','string',['limit'=>510]);
        $post->addColumn('autor','string',['limit'=>100]);
        
        $post->addColumn('created_at','datetime');
        $post->addColumn('update_at','datetime',['null'=>true]);
        $post->create();
    }
}
