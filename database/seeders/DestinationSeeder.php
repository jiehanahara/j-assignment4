<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::create([
            'name' => 'Asia Heritage',
            'description' => 'Asia Heritage is a travel agency that offers a wide range of travel packages and services to customers. They specialize in providing unique and memorable travel experiences to destinations around the world. With a team of experienced travel experts, Asia Heritage is dedicated to creating personalized itineraries that cater to the specific needs and preferences of their clients. Whether you are looking for a relaxing beach vacation, an adventurous trek, or a cultural immersion, Asia Heritage has something for everyone. They work closely with their clients to ensure that every aspect of their trip is taken care of, from flights and accommodations to activities and excursions. With a commitment to customer satisfaction and a passion for travel, Asia Heritage is the go-to choice for anyone looking to explore the world and create unforgettable memories.',
            'location' => 'Jl. Yos Sudarso No.KM.12, Muara Fajar, Kec. Rumbai, Kota Pekanbaru, Riau 28265, Indonesia.',
            'working_hours' => '09:00 - 18:00',
            'working_days' => 'Monday - Sunday',
            'ticket_Price' => 30000,
            
        ]);

        Destination::create([
            'name' => 'Pekanbaru Mall',
            'description' => 'Pekanbaru Mall is a popular shopping destination located in the heart of Pekanbaru, Indonesia. It offers a wide range of retail stores, dining options, and entertainment facilities for visitors of all ages. The mall features a modern and spacious design, making it a comfortable and enjoyable place to shop and spend time with family and friends. With its diverse selection of shops and amenities, Pekanbaru Mall is a must-visit destination for both locals and tourists looking for a vibrant shopping experience.',
            'location' => 'Jl. Sudirman No. 123, Pekanbaru, Riau 28125, Indonesia.',
            'working_hours' => '10:00 - 22:00',
            'working_days' => 'Monday - Sunday',
            'ticket_Price' => 0,
        ]);

        Destination::create([
            'name' => 'Riau Fantasi',
            'description' => 'Riau Fantasi is a popular amusement park located in Pekanbaru, Indonesia. It offers a wide range of thrilling rides and attractions for visitors of all ages. The park features roller coasters, water rides, and various entertainment options, making it a perfect destination for families and thrill-seekers alike. With its vibrant atmosphere and exciting activities, Riau Fantasi is a must-visit destination for anyone looking to have fun and create unforgettable memories.',
            'location' => 'Jl. Soekarno Hatta No. 456, Pekanbaru, Riau 28125, Indonesia.',
            'working_hours' => '10:00 - 18:00',
            'working_days' => 'Monday - Sunday',
            'ticket_Price' => 50000,
        ]);

        Destination::create([
            'name' => 'Anjungan Riau',
            'description' => 'Anjungan Riau is a cultural park located in Pekanbaru, Indonesia. It showcases the rich cultural heritage of the Riau province through various exhibits, traditional performances, and interactive displays. Visitors can explore the traditional architecture, art, and crafts of the region while enjoying live performances that highlight the local culture. Anjungan Riau is a must-visit destination for those interested in learning about the history and traditions of Riau while experiencing its vibrant culture firsthand.',
            'location' => 'Jl. Jenderal Sudirman No. 789, Pekanbaru, Riau 28125, Indonesia.',
            'working_hours' => '09:00 - 17:00',
            'working_days' => 'Monday - Sunday',
            'ticket_Price' => 20000,
        ]);

        Destination::create([
            'name' => 'Masjid Agung An-Nur',
            'description' => 'Masjid Agung An-Nur is a grand mosque located in Pekanbaru, Indonesia. It is one of the largest mosques in Southeast Asia and serves as a significant religious and cultural landmark in the city. The mosque features stunning architecture with intricate designs and spacious prayer halls that can accommodate thousands of worshippers. Masjid Agung An-Nur is not only a place of worship but also a popular tourist destination, attracting visitors from around the world who come to admire its beauty and learn about Islamic culture.',
            'location' => 'Jl. Hang Tuah No. 123, Pekanbaru, Riau 28125, Indonesia.',
            'working_hours' => '24 hours',
            'working_days' => 'Monday - Sunday',
            'ticket_Price' => 0,
        ]);

        Destination::create([
            'name' => 'Taman Wisata Alam Mayang',
            'description' => 'Taman Wisata Alam Mayang is a nature park located in Pekanbaru, Indonesia. It offers a serene and picturesque environment for visitors to enjoy the beauty of nature. The park features lush greenery, walking trails, and a variety of flora and fauna, making it an ideal destination for nature lovers and outdoor enthusiasts. Visitors can take leisurely strolls through the park, have picnics, or simply relax while surrounded by the tranquility of nature. Taman Wisata Alam Mayang is a must-visit destination for those seeking a peaceful escape from the hustle and bustle of city life.',
            'location' => 'Jl. Mayang No. 456, Pekanbaru, Riau 28125, Indonesia.',
            'working_hours' => '08:00 - 17:00',
            'working_days' => 'Monday - Sunday',
            'ticket_Price' => 15000,
        ]);

        Destination::create([
            'name' => 'istana Siak',
            'description' => 'Istana Siak is a historical palace located in Siak Sri Indrapura, Riau, Indonesia. It was built in the 19th century and served as the residence of the Sultan of Siak. The palace is known for its stunning architecture, which combines traditional Malay and Islamic styles. Visitors can explore the beautifully decorated rooms, intricate carvings, and historical artifacts that showcase the rich cultural heritage of the region. Istana Siak is a must-visit destination for history enthusiasts and those interested in learning about the royal history of Riau while admiring the grandeur of this magnificent palace.',
            'location' => 'Jl. Sultan Syarif Kasim No. 123, Siak Sri Indrapura, Riau 28711, Indonesia.',
            'working_hours' => '09:00 - 17:00',
            'working_days' => 'Monday - Sunday',
            'ticket_Price' => 25000,
        ]);

        Destination::create([
            'name' => 'Danau Buatan',
            'description' => 'Danau Buatan is an artificial lake located in Pekanbaru, Indonesia. It is a popular recreational area for locals and tourists alike, offering a serene environment for relaxation and outdoor activities. The lake is surrounded by lush greenery and features walking paths, picnic areas, and boating facilities. Visitors can enjoy leisurely strolls around the lake, have picnics with family and friends, or rent boats to explore the water. Danau Buatan is a must-visit destination for those looking to unwind and connect with nature while enjoying the scenic beauty of the area.',
            'location' => 'Jl. Danau Buatan No. 456, Pekanbaru, Riau 28125, Indonesia.',
            'working_hours' => '08:00 - 18:00',
            'working_days' => 'Monday - Sunday',
            'ticket_Price' => 10000,
        ]);

        Destination::create([
            'name' => 'Asia Farm',
            'description' => 'Asia Farm is a popular agritourism destination located in Pekanbaru, Indonesia. It offers visitors the opportunity to experience farm life and learn about agriculture in a fun and interactive way. The farm features a variety of activities, including animal feeding, crop harvesting, and traditional farming demonstrations. Visitors can also enjoy fresh produce from the farm and participate in workshops that teach sustainable farming practices. Asia Farm is a must-visit destination for families and individuals looking to connect with nature and gain a deeper understanding of agriculture while having a memorable and enjoyable experience.',
            'location' => 'Jl. Asia Farm No. 789, Pekanbaru, Riau 28125, Indonesia.',
            'working_hours' => '09:00 - 17:00',
            'working_days' => 'Monday - Sunday',
            'ticket_Price' => 20000,
        ]);

        Destination::create([
            'name' => 'Candi Muara Takus',
            'description' => 'Candi Muara Takus is an ancient Buddhist temple complex located in Riau, Indonesia. It is one of the most significant archaeological sites in the region and is believed to have been built in the 11th century. The temple complex features several structures, including stupas, prayer halls, and intricate carvings that reflect the rich cultural and religious history of the area. Visitors can explore the well-preserved ruins, learn about the historical significance of the site, and admire the architectural beauty of this ancient temple. Candi Muara Takus is a must-visit destination for history buffs and those interested in exploring the cultural heritage of Riau while experiencing the mystique of this ancient site.',
            'location' => 'Jl. Candi Muara Takus No. 123, Riau, Indonesia.',
            'working_hours' => '08:00 - 17:00',
            'working_days' => 'Monday - Sunday',
            'ticket_Price' => 15000,
        ]);
         
        Destination::create([
            'name' => 'Living World Pekanbaru',
            'description' => 'Living World Pekanbaru is a popular theme park located in Pekanbaru, Indonesia. It offers a wide range of attractions and activities for visitors of all ages, including thrilling rides, interactive exhibits, and entertaining shows. The park is designed to provide an immersive experience that combines education with fun, making it an ideal destination for families and tourists looking for an exciting day out. Living World Pekanbaru is a must-visit destination for those seeking adventure and entertainment in a vibrant and engaging environment.',
            'location' => 'Jl. Living World No. 789, Pekanbaru, Riau 28125, Indonesia.',
            'working_hours' => '09:00 - 21:00',
            'working_days' => 'Monday - Sunday',
            'ticket_Price' => 25000,
        ]);

        Destination::create([
            'name' => 'Trans Studio Mini Pekanbaru',
            'description' => 'Trans Studio Mini Pekanbaru is a popular indoor theme park located in Pekanbaru, Indonesia. It offers a variety of attractions and activities for visitors of all ages, including thrilling rides, interactive exhibits, and entertaining shows. The park is designed to provide an immersive experience that combines education with fun, making it an ideal destination for families and tourists looking for an exciting day out. Trans Studio Mini Pekanbaru is a must-visit destination for those seeking adventure and entertainment in a vibrant and engaging environment.',
            'location' => 'Jl. Trans Studio Mini No. 789, Pekanbaru, Riau 28125, Indonesia.',
            'working_hours' => '09:00 - 21:00',
            'working_days' => 'Monday - Sunday',
            'ticket_Price' => 20000,
        ]);

        Destination::create([
            'name' => 'Rumah Singgah Tuan Kadir',
            'description' => 'Rumah Singgah Tuan Kadir is a traditional accommodation located in Pekanbaru, Indonesia. It offers a unique cultural experience for visitors to immerse themselves in the local way of life. The house features traditional architecture and provides a comfortable stay for guests who wish to experience the charm of local hospitality. Rumah Singgah Tuan Kadir is a must-visit destination for those seeking an authentic cultural encounter in the heart of Pekanbaru.',
            'location' => 'Jl. Tuan Kadir No. 123, Pekanbaru, Riau 28125, Indonesia.',
            'working_hours' => '08:00 - 17:00',
            'working_days' => 'Monday - Sunday',
            'ticket_Price' => 15000,
        ]);

        Destination::create([
            'name' => 'Sungai Siak Riverside Park',
            'description' => 'Sungai Siak Riverside Park is a scenic park located along the Sungai Siak in Pekanbaru, Indonesia. It offers a peaceful retreat for visitors to enjoy the natural beauty of the river and its surroundings. The park features walking paths, recreational facilities, and opportunities for birdwatching and nature photography. Visitors can relax by the river, take boat rides, or participate in various outdoor activities. Sungai Siak Riverside Park is a must-visit destination for those seeking a tranquil escape from the urban environment.',
            'location' => 'Jl. Sungai Siak No. 789, Pekanbaru, Riau 28125, Indonesia.',
            'working_hours' => '08:00 - 17:00',
            'working_days' => 'Monday - Sunday',
            'ticket_Price' => 15000,
        ]);

        Destination::create([
            'name' => 'Taman Hutan Raya Sultan Syarif Hasyim',
            'description' => 'Taman Hutan Raya Sultan Syarif Hasyim is a beautiful forest park located in Pekanbaru, Indonesia. It offers a peaceful environment for visitors to connect with nature and enjoy various recreational activities. The park features well-maintained trails, picnic areas, and opportunities for birdwatching and nature photography. Visitors can explore the diverse flora and fauna while taking in the fresh air and serene atmosphere. Taman Hutan Raya Sultan Syarif Hasyim is a must-visit destination for those seeking a natural retreat from the urban environment.',
            'location' => 'Jl. Sultan Syarif Hasyim No. 123, Pekanbaru, Riau 28125, Indonesia.',
            'working_hours' => '08:00 - 17:00',
            'working_days' => 'Monday - Sunday',
            'ticket_Price' => 15000,
        ]);

        for ($i = 1; $i <= 1000; $i++) {
            Destination::create([
                'name' => fake("id_ID")->name(),
                'description' => fake("id_ID")->sentence(),
                'location' => fake("id_ID")->address() . "Pekanbaru, Riau",
                'working_hours' => "09:00 - 17:00",
                'working_days' => "Monday - Sunday",
                'ticket_Price' => rand(10000, 50000),
            ]);
        }
    }
}
