<?php

namespace App\DataFixtures;

use App\Entity\Announcement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use DateTime;

class AnnouncementFixtures extends Fixture implements DependentFixtureInterface
{
    private const ANNOUNCEMENTS = [
        [
            'slugCategory' => 'category_evenements',
            'slugRegion' => 'region_hdf',
            'slugUser' => '',
            'title' => 'Poésie Festival',
            'message' => 'Lille Poésie Festival innove en mettant à l’honneur durant trois
             jours la poésie contemporaine dans les Hauts-de-France',
            'address' => 'Republique Beaux Arts',
            'date' => '2022-11-24',
            'date_start' => '2022-11-24',
            'date_end' => '2022-11-26',
            'updated_at' => '2021-11-24',
            'image' => 'poesie.jpg',
            'city' => 'Lille',
            'zipcode' => 59000,
        ],
        [
            'slugCategory' => 'category_evenements',
            'slugRegion' => 'region_nouvelle-aquitaine',
            'slugUser' => '',
            'title' => 'Chasse au Trésor Mortelle',
            'message' => 'Challenge, découverte,
             et convivialité, trois éléments que vous retrouverez dans les jeux de piste Quiveutpister.',
            'address' => 'Quai du Wault',
            'date' => '2022-11-24',
            'date_start' => '2022-11-20',
            'date_end' => '2022-11-30',
            'updated_at' => '2021-11-24',
            'image' => 'jeudepiste.jpg',
            'city' => 'Lille',
            'zipcode' => 59000,
        ],
        [
            'slugCategory' => 'category_restaurations',
            'slugRegion' => 'region_ile-de-france',
            'slugUser' => '',
            'title' => 'Restaurant hawaïen',
            'message' => 'Le POKAWA, un restaurant hawaïen dans le 2ème arrondissement de Paris,
             spécialiste du poké bowl, vous propose des recettes inédites et délicieuses aux ingrédients
             healthy !A Paris on trouve de quoi satisfaire toutes ses envies culinaires !
             Pour les voyageurs gustatifs, c’est la ville pour faire le tour du monde ! Depuis quelque temps,
             un petit nouveau s’invite à la fête et apporte du soleil à nos papilles.Vous devez absolument
             tester le POKAWA, un restaurant Hawaïen, et son délicieux Poké Bowl. C’est le plat traditionnel
             Hawaïen qui vous apporte tout ce dont vous avez besoin, le tout super joliment arrangé dans un seul bol.
             Composé de produits de qualité hyper frais et rigoureusement sélectionnés, il a pour base du poisson
             cru mariné, du riz vinaigré et des légumes. A cela s’ajoute une quantité d’ingrédients healthy à adapter
             selon votre goût et vos envies : saumon frais d’Écosse, thon rouge, daurade, falafel, mangue, ananas,
             avocat, edamame, tomate-cerise, radis, choux rouge, graines de sésame, graines de lin, de courge, chia,
             oignons frits, etc.Les bols comme les sauces sont faits maison et à partir de produits naturels.
             Vous ne trouverez aucun conservateur, colorant et autres produits non désirés ! :) !Pour le dessert
             (ou la pause goûter), même topo, que du bon cuisiné avec amour et passion !',
            'address' => '36 rue Poissonnière ',
            'date' => '2022-11-24',
            'date_start' => '2023-01-10',
            'date_end' => '2023-01-12',
            'updated_at' => '2021-11-24',
            'image' => 'parisRestaurant.jpg',
            'city' => 'Paris',
            'zipcode' => 75002,
        ],
        [
            'slugCategory' => 'category_restaurations',
            'slugRegion' => 'region_bretagne',
            'slugUser' => '',
            'title' => 'Restaurant Le Kerland',
            'message' => 'Une cuisine généreuse et riche en saveurs à déguster en tête-à-tête',
            'address' => 'Route de Moëlan',
            'date' => '2022-11-24',
            'date_start' => '2022-12-31',
            'date_end' => '2022-12-31',
            'updated_at' => '2021-11-24',
            'image' => 'bretagneRestaurant.jpg',
            'city' => 'Riec-sur-Bélon',
            'zipcode' => 29340,
        ],
        [
            'slugCategory' => 'category_hebergements',
            'slugRegion' => 'region_paca',
            'slugUser' => '',
            'title' => 'Les chambres de toucas',
            'message' => 'Bienvenue aux chambres de ToucasNous vous accueillons
            dans notre maison d\'hôtes.\nPensée et créée spécialement pour vous
            recevoir, dans un cadre convivial et verdoyant, au cœur de la vallée du
            Gapeau.Nous disposons de 5 chambres, pour un capacité totale de 13
            personnes\n2 chambres simple avec lit double ou lit jumeaux avec
            terrasse privée et salle d\'eau commune : de 50 à 60 €, pour 2 personnes.
            \n1 chambre avec lavabo privée de 50 a 60 euros la nuit. Ouvert de juin
            a septembre.\n1 suite familiale avec salle d\'eau privée : de 60 à 95 €,
             4 personnes maximum\n1 suite PMR avec salle d\'eau privée : de 60 à 85
             €, 3 personnes maximum.\nToutes les chambres sont équipées, télévision,
            climatisation, WiFiNous proposons un service de petit déjeuner non
            inclus dans le tarif de base il vous est proposé à 7 € par personne.
            \nNous mettons à disposition une cuisine commune pour préparer vos
            repas pour 5 € par jour pour 2 personnes.Vous avez accès libre de
            10h à 22h à la piscine et au spa.\nUn espace bien-être sur
            rendez-vous au sein de la maison d\'hôtes.\nParking privee sous
            video surveillance\nEn juillet et aout un minimum de 5 nuitées est
            demandé.Au plaisir de vous accueillir .Carole',
            'address' => '78, chemin Rovera',
            'date' => '2022-11-24',
            'date_start' => '2022-12-24',
            'date_end' => '2022-12-26',
            'updated_at' => '2021-11-24',
            'image' => 'hotelToucas.jpg',
            'city' => 'Solliès-Toucas',
            'zipcode' => 83210,
        ],
        [
            'slugCategory' => 'category_hebergements',
            'slugRegion' => 'region_paca',
            'slugUser' => '',
            'title' => 'Hôtel Roi Théodore & SPA',
            'message' => 'Vous trouverez assurément à l\'Hôtel Le Roi Theodore & SPA
             de quoi concilier tranquillité et relaxation, évasion et gastronomie, détente et folles nuits.',
            'address' => 'Av. de Bastia, 20137',
            'date' => '2022-11-24',
            'date_start' => '2022-12-30',
            'date_end' => '2023-01-02',
            'updated_at' => '2021-11-24',
            'image' => 'hotelRoi.jpg',
            'city' => 'Porto-Vecchio',
            'zipcode' => 20137,
        ],
        [
            'slugCategory' => 'category_evenements',
            'slugRegion' => 'region_grand-est',
            'slugUser' => '',
            'title' => 'Artisanat local // Exposition – Vente – Ateliers',
            'message' => 'A partir du 22 novembre à Troyes, retrouvez un nouvel espace
            éphémère d\'exposition, vente et ateliers DIY',
            'address' => '44 rue du Général Saussier',
            'date' => '2022-11-20',
            'date_start' => '2022-11-22',
            'date_end' => '2022-12-18',
            'updated_at' => '2021-11-24',
            'image' => 'event_troyes.jpg',
            'city' => 'Troyes',
            'zipcode' => 10000,
        ],
        [
            'slugCategory' => 'category_evenements',
            'slugRegion' => 'region_hdf',
            'slugUser' => '',
            'title' => 'Le Carnaval de Dunkerque',
            'message' => 'Au son d’un joyeux tintamarre les carnavaleux défilent en
            bandes et chahuts organisés. Ces réjouissances du 17ème siècle suivent
            le rituel d’avant carême. Les Dunkerquois se déguisent avec perruques,
            jupes et bas résilles et chantent « l’hymne à Jean Bart » avant de
            danser le rigodon final.',
            'address' => 'Dunkerque',
            'date' => '2022-11-24',
            'date_start' => '2023-02-09',
            'date_end' => '2023-02-12',
            'updated_at' => '2021-11-24',
            'image' => 'carnaval.jpg',
            'city' => 'Dunkerque',
            'zipcode' => 59140,
        ],
        [
            'slugCategory' => 'category_restaurations',
            'slugRegion' => 'region_grand-est',
            'slugUser' => '',
            'title' => 'Le Grand Cerf',
            'message' => 'Le Grand Cerf propose toujours des ventes à emporter!
            Commande 48h à l\'avance',
            'address' => '50 route nationale',
            'date' => '2022-11-24',
            'date_start' => '2023-02-09',
            'date_end' => '2023-02-12',
            'updated_at' => '2021-11-24',
            'image' => 'restaurant_grand_est.png',
            'city' => 'Villers-Allerand',
            'zipcode' => 51500,
        ],
        [
            'slugCategory' => 'category_evenements',
            'slugRegion' => 'region_auvergne-rhone-alpes',
            'slugUser' => '',
            'title' => '48ème salon de l\'automne',
            'message' => 'Peintures, sculptures. Entrée libre de 14h à 18h30. Conférence "Frida Kahlo"
             par Michel Delon, le vendredi 02 décembre à 18h au profit du téléthon.',
            'address' => '79 faubourg Saint-Jean',
            'date' => '2022-11-10',
            'date_start' => '2022-11-26',
            'date_end' => '2022-12-04',
            'updated_at' => '2021-11-24',
            'image' => 'evenement_auvergne.jpg',
            'city' => 'Le-Puy-En-Vellay',
            'zipcode' => 43000,
        ],
        [
            'slugCategory' => 'category_restaurations',
            'slugRegion' => 'region_nouvelle-aquitaine',
            'slugUser' => '',
            'title' => 'Le Savignois',
            'message' => 'Cette auberge propose une cuisine de saison fraîche et
            goûteuse, dans laquelle se lisent certaines influences méridionales. En
            salle, le service est souriant et attentionné. Une adresse sympathique.',
            'address' => '2 rue du Lavoir',
            'date' => '2022-11-24',
            'date_start' => '2022-12-09',
            'date_end' => '2022-12-09',
            'updated_at' => '2021-11-24',
            'image' => 'restaurantsavignois.jpg',
            'city' => 'Savigny-sous-Faye',
            'zipcode' => 86140,
        ],
        [
            'slugCategory' => 'category_hebergements',
            'slugRegion' => 'region_nouvelle-aquitaine',
            'slugUser' => '',
            'title' => "Study Hôtel Bordeaux Lormont",
            'message' => 'Fête organisée, venez nombreux!',
            'address' => '656 Bonita Walks',
            'date' => '2022-11-24',
            'date_start' => '2023-12-09',
            'date_end' => '2023-12-09',
            'updated_at' => '2021-11-24',
            'image' => 'hotelna.jpg',
            'city' => 'Bordeaux',
            'zipcode' => 33000,
        ],
        [
            'slugCategory' => 'category_restaurations',
            'slugRegion' => 'region_bourgogne-franche-comte',
            'slugUser' => '',
            'title' => "Fête de la moutarde",
            'message' => 'Pas besoin de la décrire, mais ça sera au Resto!',
            'address' => '278 Wolff Prairie',
            'date' => '2022-11-24',
            'date_start' => '2023-12-09',
            'date_end' => '2023-12-09',
            'updated_at' => '2021-11-24',
            'image' => 'restaubourgogne.jpg',
            'city' => 'Dijon',
            'zipcode' => 21000,
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::ANNOUNCEMENTS as $goodeal) {
            $announcement = new Announcement();
            $announcement->setTitle($goodeal['title']);
            $announcement->setMessage($goodeal['message']);
            $announcement->setAddress($goodeal['address']);
            $announcement->setDate(new DateTime($goodeal['date']));
            $announcement->setDateStart(new DateTime($goodeal['date_start']));
            $announcement->setDateEnd(new DateTime($goodeal['date_end']));
            $announcement->setUpdatedAt(new DateTime($goodeal['updated_at']));
            $announcement->setImage($goodeal['image']);
            $announcement->setCity($goodeal['city']);
            $announcement->setZipcode($goodeal['zipcode']);
            $announcement->setCategory($this->getReference($goodeal['slugCategory']));
            $announcement->setRegion($this->getReference($goodeal['slugRegion']));
            //$announcement->setUser($this->getReference($goodeal['slugUser']));
            $manager->persist($announcement);
        };
        $manager->flush();
    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont AnnouncementFixtures dépend
        return [
            CategoryFixtures::class,
            RegionFixtures::class,
            //UserFixtures::class,
        ];
    }
}
