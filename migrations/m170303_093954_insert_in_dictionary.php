<?php

use yii\db\Migration;

class m170303_093954_insert_in_dictionary extends Migration
{
    public function safeUp()
    {
        $time = date('Y-m-d H:i:s');

        $this->batchInsert('dictionary', [
            'word_ru',
            'word_en',
            'created_at',
            'updated_at'
        ], [
            ['яблоко', 'apple', $time, $time],
            ['персик', 'pear', $time, $time],
            ['апельсин', 'orange', $time, $time],
            ['виноград', 'grape', $time, $time],
            ['лимон', 'lemon', $time, $time],
            ['ананас', 'pineapple', $time, $time],
            ['арбуз', 'watermelon', $time, $time],
            ['кокос', 'coconut', $time, $time],
            ['банан', 'banana', $time, $time],
            ['помело', 'pomelo', $time, $time],
            ['клубника', 'strawberry', $time, $time],
            ['малина', 'raspberry', $time, $time],
            ['дыня', 'melon', $time, $time],
            ['абрикос', 'apricot', $time, $time],
            ['манго', 'mango', $time, $time],
            ['слива', 'pear', $time, $time],
            ['гранат', 'pomegranate', $time, $time],
            ['вишня', 'cherry', $time, $time],
        ]);
    }


    public function safeDown()
    {
       $this->truncateTable('dictionary');
    }
}
