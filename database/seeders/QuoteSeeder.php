<?php

namespace Database\Seeders;

use App\Models\Quote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Marcus Aurelius quotes */
        Quote::create([
            'philosopher' => 'Marcus Aurelius',
            'quote' => 'The happiness of your life depends upon the quality of your thoughts.',
            'philosopher_id' => 1,
            'user_id' => 1,
        ]);
        Quote::create([
            'philosopher' => 'Marcus Aurelius',
            'quote' => 'The happiness of your life depends upon the quality of your thoughts.',
            'philosopher_id' => 1,
            'user_id' => 1,
        ]);
        Quote::create([
            'philosopher' => 'Marcus Aurelius',
            'quote' => 'The happiness of your life depends upon the quality of your thoughts.',
            'philosopher_id' => 1,
            'user_id' => 1,
        ]);
        Quote::create([
            'philosopher' => 'Marcus Aurelius',
            'quote' => 'The happiness of your life depends upon the quality of your thoughts.',
            'philosopher_id' => 1,
            'user_id' => 1,
        ]);
        Quote::create([
            'philosopher' => 'Marcus Aurelius',
            'quote' => 'When you arise in the morning think of what a privilege it is to be alive, to think, to enjoy, to love…',
            'philosopher_id' => 1,
            'user_id' => 1,
        ]);
        Quote::create([
            'philosopher' => 'Marcus Aurelius',
            'quote' => 'Life is short — the fruit of this life is a good character and acts for the common good.',
            'philosopher_id' => 1,
            'user_id' => 3,
        ]);
        Quote::create([
            'philosopher' => 'Marcus Aurelius',
            'quote' => 'We live only now. Everything else is either passed or is unknown.',
            'philosopher_id' => 1,
            'user_id' => 4,
        ]);
        /* Socrates Quotes */

        Quote::create([
            'philosopher' => 'Socrates',
            'quote' => 'The unexamined life is not worth living.',
            'philosopher_id' => 3,
            'user_id' => 1,
        ]);
        Quote::create([
            'philosopher' => 'Socrates',
            'quote' => 'I cannot teach anybody anything. I can only make them think.',
            'philosopher_id' => 3,
            'user_id' => 2,
        ]);
        Quote::create([
            'philosopher' => 'Socrates',
            'quote' => 'The only true wisdom is in knowing you know nothing.',
            'philosopher_id' => 3,
            'user_id' => 1,
        ]);
        Quote::create([
            'philosopher' => 'Socrates',
            'quote' => 'Strong minds discuss ideas, average minds discuss events, weak minds discuss people.',
            'philosopher_id' => 3,
            'user_id' => 5,
        ]);

        /* Plato Quotes */

        Quote::create([
            'philosopher' => 'Plato',
            'quote' => 'Music is a moral law. It gives soul to the universe, wings to the mind, flight to the imagination, and charm and gaiety to life and to everything.',
            'philosopher_id' => 2,
            'user_id' => 1,
        ]);
        Quote::create([
            'philosopher' => 'Plato',
            'quote' => 'Democracy... is a charming form of government, full of variety and disorder; and dispensing a sort of equality to equals and unequals alike.',
            'philosopher_id' => 2,
            'user_id' => 3,
        ]);
        Quote::create([
            'philosopher' => 'Plato',
            'quote' => 'The measure of a man is what he does with power.',
            'philosopher_id' => 2,
            'user_id' => 1,
        ]);
    }
}
