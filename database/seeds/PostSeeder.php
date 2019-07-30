<?php


use Phinx\Seed\AbstractSeed;

class PostSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker =\Faker\Factory::create();
        $data=[];
        for($i=0; $i<10; $i++){
            $data[]=[
                'titulo'=>$faker->word,
                'descripcion'=>$faker->paragraph($nbSentences = 19, $variableNbSentences = true),
                'autor'=>$faker->name($gender = null|'male'|'female'),
                'created_at'=>date('Y-m-d H:i:s'),
                'update_at'=>date('Y-m-d H:i:s')
            ];
        }

        $this->insert('post',$data);
    }
}
