<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            [
                'section' => 'home Nama',
                'content' => 'Rayhan Al Farassy'
            ],
            [
                'section' => 'home Title',
                'content' => 'Informatics Engineering at Riau University'
            ],
            [
                'section' => 'home Btn',
                'content' => 'About Me'
            ],
            [
                'section' => 'home Color',
                'content' => 'yellow'
            ],
            [
                'section' => 'about Introduction',
                'content' => 'Hello! I\'m Rayhan, a student from Riau University. Major in Informatics. I do Software Engineering, Network Engineering, and UI/UX Design.'
            ],
            [
                'section' => 'about Title',
                'content' => 'Want to do collaboration and project work? feel free to contact me on'
            ],
            [
                'section' => 'about Image',
                'content' => 'https://media.discordapp.net/attachments/1010133651247341609/1245655159632166994/rey.png?ex=66598a45&is=665838c5&hm=9aea0523d8e6b851ba21caa1dbfc54bba579af1cb4be65a715e260b34f1d7836&=&format=webp&quality=lossless&width=437&height=437'
            ],
            [
                'section' => 'about Link',
                'content' => 'https://www.linkedin.com/in/rayhanalfarassy/'
            ],
            [
                'section' => 'about Link Btn',
                'content' => 'LinkedIn'
            ],
            [
                'section' => 'about Btn',
                'content' => 'My Skills'
            ],
            [
                'section' => 'about Color',
                'content' => 'light'
            ],
            [
                'section' => 'skill Introduction',
                'content' => 'My Skills'
            ],
            [
                'section' => 'skill Title',
                'content' => 'What Can I Do For You'
            ],
            [
                'section' => 'skill 1',
                'content' => 'UI/UX Design'
            ],
            [
                'section' => 'skill Desc1',
                'content' => 'Figma, Adobe Illustrator'
            ],
            [
                'section' => 'skill 2',
                'content' => 'Desktop/Mobile Application'
            ],
            [
                'section' => 'skill Desc2',
                'content' => 'Java, C++'
            ],
            [
                'section' => 'skill 3',
                'content' => 'Web Development'
            ],
            [
                'section' => 'skill Desc3',
                'content' => 'HTML, CSS, Bootstrap, JavaScript, PHP, Laravel'
            ],
            [
                'section' => 'skill 4',
                'content' => 'Computer Networking'
            ],
            [
                'section' => 'skill Desc4',
                'content' => 'Cisco, Debian, Mikrotik'
            ],
            [
                'section' => 'skill Background Color',
                'content' => 'primary'
            ],
            [
                'section' => 'skill Text Color',
                'content' => 'white'
            ],
            [
                'section' => 'portfolio Introduction',
                'content' => 'Portfolio'
            ],
            [
                'section' => 'portfolio Title',
                'content' => 'My Latest Project'
            ],
            [
                'section' => 'portfolio 1',
                'content' => 'Riau University Landing Page Redesign'
            ],
            [
                'section' => 'portfolio Desc1',
                'content' => 'A mid-semester exam project carried out a redesign, especially on the Riau University website'
            ],
            [
                'section' => 'portfolio Image1',
                'content' => 'https://media.discordapp.net/attachments/1010133651247341609/1245669923087188029/portfolio1.jpg?ex=66599805&is=66584685&hm=3da0eb187fe3425ecf558bdec069099458be3f147988e430c9344c8b02a97519&=&format=webp&width=620&height=437'
            ],
            [
                'section' => 'portfolio Link1',
                'content' => 'https://rayhanfay.github.io/redesign-landing-page/'
            ],
            [
                'section' => 'portfolio 2',
                'content' => 'Logistics Inventory Application'
            ],
            [
                'section' => 'portfolio Desc2',
                'content' => 'A Java-based application project, this application is used to carry out an inventory of incoming and outgoing data on fresh vegetables.'
            ],
            [
                'section' => 'portfolio Image2',
                'content' => 'https://media.discordapp.net/attachments/1010133651247341609/1245669923624189983/portfolio2.jpg?ex=66599805&is=66584685&hm=ba1d3b44e76902a6c795b3652386f8513855e4215ca10180562a13de88f0352f&=&format=webp&width=620&height=437'
            ],
            [
                'section' => 'portfolio Link2',
                'content' => 'https://github.com/rayhanfay/Logistics-Inventory-Application'
            ],
            [
                'section' => 'portfolio 3',
                'content' => 'Spotify Clone'
            ],
            [
                'section' => 'portfolio Desc3',
                'content' => 'This application is called “Raytify”. A clone of Spotify which uses the Figma application in the process of developing UI / UX Design interpretations.'
            ],
            [
                'section' => 'portfolio Image3',
                'content' => 'https://media.discordapp.net/attachments/1010133651247341609/1245669936232267930/portfolio3.jpg?ex=66599808&is=66584688&hm=0129397c80519dd8e2a865e56d7b93c4b1f920974d3936f969f2ef1cef651ce8&=&format=webp&width=620&height=437'
            ],
            [
                'section' => 'portfolio Link3',
                'content' => 'https://www.figma.com/proto/uF4GisQ3RvtmCMayk1tEhK/Raytify?type=design&node-id=195-656&t=ZYnDAg1mcL4vAEG6-0&scaling=scale-down&page-id=0%3A1&starting-point-node-id=1%3A2'
            ],
            [
                'section' => 'portfolio 4',
                'content' => 'Education Guessing Game'
            ],
            [
                'section' => 'portfolio Desc4',
                'content' => 'A 2D game project created using the HTML5 programming language.'
            ],
            [
                'section' => 'portfolio Image4',
                'content' => 'https://media.discordapp.net/attachments/1010133651247341609/1245669953487503512/portfolio4.jpg?ex=6659980c&is=6658468c&hm=b1d8b073e7f487c5a85e421ff3e2b7f6af9dfe7db124fe5f6eb728fa3afbb5ff&=&format=webp&width=620&height=437'
            ],
            [
                'section' => 'portfolio Link4',
                'content' => 'https://github.com/rayhanfay/Android-2D-Guessing-Game'
            ],
            [
                'section' => 'contact Title',
                'content' => 'I\'m open for any inquiries or any commissions'
            ],
            [
                'section' => 'contact Emailbtn',
                'content' => 'Email'
            ],
            [
                'section' => 'contact Email',
                'content' => 'mailto:rayhanafz1717@gmail.com'
            ],
            [
                'section' => 'contact Button',
                'content' => 'Contact'
            ],
            [
                'section' => 'contact Link',
                'content' => 'https://instagram.com/rayhanfay'
            ],
            [
                'section' => 'contact Color',
                'content' => 'primary'
            ],
            [
                'section' => 'contact Text Color',
                'content' => 'white'
            ],
            [
                'section' => 'contact Image',
                'content' => 'https://media.discordapp.net/attachments/1010133651247341609/1245673713748148306/bg-callout.jpg?ex=66599b8c&is=66584a0c&hm=450e1b929bd000ed6d09fe722f674a2717c307240cd9bcb2b02043227289ecce&=&format=webp&width=687&height=210'
            ],
        ]);
    }
}
