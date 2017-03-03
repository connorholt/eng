<?php

use yii\db\Migration;

class m170303_085750_main_tables extends Migration
{
    /**
     * Создание основных таблиц, делаем все в транзакции
     */
    public function safeUp()
    {
        $this->createTable('dictionary', [
            'id'         => $this->primaryKey()->comment('Id слова в словаре'),
            'word_ru'    => $this->string(50)->comment('Слово на русском'),
            'word_en'    => $this->string(50)->comment('Слово на англ'),
            'created_at' => $this->dateTime()->comment('Время добавления слова'),
            'updated_at' => $this->dateTime()->comment('Время обновления слова')
        ]);

        $this->createTable('users', [
            'id'         => $this->primaryKey()->comment('Id пользователя'),
            'name'       => $this->string(255)->comment('Имя пользователя'),
            'created_at' => $this->dateTime()->comment('Время добавления пользователя'),
            'updated_at' => $this->dateTime()->comment('Время обновления пользователя')
        ]);

        $this->createTable('users_tests_history', [
            'id'                     => $this->primaryKey()->comment('Id записи в истории о тесте'),
            'user_id'                => $this->integer()->comment('Id пользователя который проходил тест'),
            'lang'                   => $this->integer(2)->comment('Язык основых слов в тесте'),
            'count_answer'           => $this->integer()->comment('Кол-во ответов которые дал пользователь'),
            'count_correct_answer'   => $this->integer()->comment('Кол-во верных ответов'),
            'count_incorrect_answer' => $this->integer()->comment('Кол-во не верных ответов'),
            'created_at'             => $this->dateTime()->comment('ремя добавления'),
            'updated_at'             => $this->dateTime()->comment('Время обновления')
        ]);

        /**
         * !!! Внимание, хотя таблица связана с таблицей users_tests_history
         * есть повторяющиеся столбцы, это осознаный шаг - денормализация базы данных
         * чтобы было проще работать со статистикой в дальйнешем
         */
        $this->createTable('users_mistakes', [
            'id'           => $this->primaryKey()->comment('Id записи об ошибке'),
            'user_id'      => $this->integer()->comment('Id пользователя который проходил тест'),
            'test_id'      => $this->integer()->comment('Id теста'),
            'word_id'      => $this->integer()->comment('Id слова с ошибкой'),
            'word_version' => $this->string(50)->comment('Версия слова которую указал автор'),
            'lang'         => $this->integer(2)->comment('Язык слова в тесте'),
            'created_at'   => $this->dateTime()->comment('ремя добавления'),
            'updated_at'   => $this->dateTime()->comment('Время обновления')
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('dictionary');
        $this->dropTable('users');
        $this->dropTable('users_tests_history');
        $this->dropTable('users_mistakes');
    }
}
