<?php

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('produits')->insert([
            'nom' => 'PC Ultra-Portable Acer Swift 3 SF314-56-52NK NX.H4CEF.002 14"',
            'description' => 'Taille de l\'écran 	14 "
                                Processeur 	Intel Core i5
                                RAM installée 	8 Go
                                Capacité de stockage 	256 Go',
            'prix' => '250.000',
            'image_produit' => 'produit-01.jpg',
            'categorie_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);


        \Illuminate\Support\Facades\DB::table('produits')->insert([
            'nom' => 'PC Ultra-Portable Asus ZenBook UX480FD-BE027T 14" avec ScreenPad',
            'description' => 'Taille de l\'écran 	14 "
                                Processeur 	Intel Core i7
                                RAM installée 	8 Go
                                Capacité de stockage 	256 Go',
            'detail' => 'UNE NOUVELLE DIMENSION S’OFFRE A VOUS
                        
                        Inspiré par les gemmes, la couleur stratifiée et profonde rayonne. Le lustre métallique change exquisément avec l\'angle du rayonnement lumineux. Avec la combinaison du point culminant, il crée le plaisir sensuel final.
                        
                        Comprenant un processeur de dernière génération couplé à une carte graphique NVIDIA® GTX 1050, l’UX480 mêle performances techniques et esthétiques. ',
            'prix' => '450.000',
            'image_produit' => 'produit-03.jpg',
            'categorie_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);


        \Illuminate\Support\Facades\DB::table('produits')->insert([
            'nom' => 'PC HP Pavilion 690-0059nf Gaming',
            'description' => 'Processeur 	AMD Ryzen 5
                                RAM installée 	8 Go
                                Capacité de stockage 	1 To
                                Carte graphique 	nVidia GeForce GTX 1060 ',
            'detail' => 'HP Pavilion Gaming Desktop PC 690-0059nf 
                        
                        Un ordinateur de bureau puissant qui offre les performances nécessaires pour jouer
                        
                        L\'ordinateur de bureau de jeu HP Pavilion est centré sur des performances fluides et des graphismes nets, le tout dans un design audacieux. Cet ordinateur offre les toutes dernières technologies ainsi que des possibilités de mise à niveau, pour des performances à jour en permanence. Préparez-vous à jouer avec puissance et style, aujourd\'hui et pour des années.
                        
                        Carte graphique puissante
                        
                        Immergez-vous dans des graphismes et une jouabilité fluides. Avec une carte graphique distincte pouvant aller jusqu\'à la NVIDIA® GeForce® GTX 1060 ou l\'AMD® Radeon™ RX 580, les décalages et ralentissements appartiennent au passé.
                        
                        Performances haute vitesse
                        
                        Libérez le plein potentiel de votre ordinateur avec un processeur Intel® Core™ ou AMD® Ryzen™ et jusqu\'à 16 Go de mémoire RAM DDR4.
                        
                        Design audacieux et remarqué
                        
                        Avec son cadre à facettes étonnant, sa finition brossée et son éclairage vert LED, cet ordinateur de bureau est fait pour les audacieux. Pour couronner le tout, des logements d\'extension internes vous permettent de mettre à niveau votre carte graphique, votre mémoire et plus encore pour suivre au plus près les dernières évolutions.
                        
                        1 La technologie multicœur est conçue pour améliorer les performances de certains logiciels. Les applications logicielles et les clients ne bénéficient pas nécessairement tous de cette technologie. Les performances et la fréquence du processeur varient en fonction de la charge de travail applicative et de vos configurations matérielles et logicielles. Le système de numérotation, de désignation de marque et/ou de dénomination d’Intel ne correspond pas à des performances plus élevées.
                        
                        Fonctions
                        
                        Sortie son Surround 5.1
                        
                        Avec tous les ports nécessaires au son Surround 5.1 authentique, offrez à vos films préférés, à vos émissions ou vos morceaux de musique, une qualité audio immersive aux nuances enrichies, en procédant simplement à la configuration d’un haut-parleur doté du Son Surround.
                        
                        Câble USB-C™
                        
                        Transférez des documents à grande vitesse vers/depuis votre stockage externe grâce à ce port USB-C™. De plus, il est réversible et simple à connecter.
                        
                        Prêt pour VR
                        
                        Nous avons fait subir au matériel et aux pilotes les jeux les plus intenses pour garantir des performances exceptionnelles et des graphismes de haute définition, afin de profiter d\'une expérience VR fluide prête à l\'emploi.
                        
                        HP Jumpstart
                        
                        Lors du premier démarrage de votre PC, obtenez une procédure pas à pas personnelle tout au long de la configuration et une vue d’ensemble informative des fonctions de votre PC.
                        
                        19 Le taux de transfert peut varier. Toutes les spécifications de performance correspondent aux spécifications standard indiquées par les fabricants de composants HP; les performances réelles peuvent être supérieures ou inférieures.
                        20 USB Type-C™ et USB-C™ sont des marques déposées d’USB Implementers Forum.
                        21 Nécessite une carte graphique NVIDIA® GTX 970 ou AMD® R9 390X au minimum, un processeur Intel® Core™ i5 et 8 Go de RAM. Tous les autres composants du système doivent être compatibles VR. ',
            'prix' => '350.000',
            'image_produit' => 'produit-04.jpg',
            'categorie_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);


        \Illuminate\Support\Facades\DB::table('produits')->insert([
            'nom' => 'PC Asus ROG Strix GL10CS-FR048T',
            'description' => 'Processeur 	Intel Core i5
                                RAM installée 	8 Go
                                Capacité de stockage 	1 To
                                Carte graphique 	NVIDIA GeForce GTX1060 ',
            'detail' => 'ROG STRIX GL10CS-FR048T

                        Petit dernier de la famille Strix, le GL10CS réunit à lui seul tous les essentiels de l\'univers gaming avec l\'expérience complète ROG pour offrir à l\'utilisateur des performances de haut-niveau et des options de configuration à un prix abordable. Le GL10CS renferme une puissance colossale dans son boîtier compact de 27 litres dont le design - rappelant celui d\'une armure aux lignes futuristes - reflète la volonté de ROG performances fulgurantes. L\'éclairage RGB personnalisable peut être contrôlé via Armoury Crate, un utilitaire centralisant toutes les optionsde configurations et de suivi des paramètres du GL10CS. ',
            'prix' => '300.000',
            'image_produit' => 'produit-05.jpg',
            'categorie_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);


        \Illuminate\Support\Facades\DB::table('produits')->insert([
            'nom' => 'Clavier Apple Magic Keyboard avec pavé numérique Gris Sidéral ',
            'description' => 'Désormais disponible en gris sidéral, le Magic Keyboard avec pavé numérique est un clavier étendu qui offre des commandes de navigation pour un défilement rapide dans les documents, et des touches fléchées de taille standard pour les jeux. Son mécanisme à ciseaux assure une meilleure stabilité des touches, tandis que son profil abaissé et la course de touche optimisée offrent confort d’utilisation et précision de frappe. Le pavé numérique est idéal pour les feuilles de calcul et les applications financières. Et comme la batterie intégrée offre une autonomie longue durée, votre clavier est opérationnel pendant au moins un mois entre deux charges. ',

            'prix' => '12.000',
            'image_produit' => 'produit-11.jpg',
            'categorie_id' => 3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);


        \Illuminate\Support\Facades\DB::table('produits')->insert([
            'nom' => 'Clavier sans fil Logitech Craft Gris ',
            'description' => 'Type de périphérique 	Clavier
                                Liaison 	Sans fil
                                Plateforme 	Mac ',
            'detail' => 'Caractéristiques complémentaires

                        Configuration requise : Connexion Internet (pour télécharger le logiciel), USB : port USB disponible requis, Connexion Bluetooth : Dispositif compatible avec la technologie Bluetooth Low Energy avec prise en charge des claviers requis (Bluetooth HD), Technologie sans fil 2.4 GHz Logitech Unifying, Logiciels pris en charge : Logitech Options, Utilisation de la molette de contrôle optimisée sur : Microsoft Word, PowerPoint, Excel 2010, 2013 et 2016 - Windows uniquement, Adobe Photoshop CC, Adobe I
                    Poids du produit
                    
                        960 g',

            'prix' => '8.000',
            'image_produit' => 'produit-12.jpg',
            'categorie_id' => 3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);


        \Illuminate\Support\Facades\DB::table('produits')->insert([
            'nom' => 'Souris Gaming Logitech G502 Hero Noir ',
            'description' => 'G502 HERO

                                SOURIS GAMING HAUTES PERFORMANCES
                                
                                CAPTEUR HERO 16K
                                
                                FONCTIONS
                                
                                HERO 16K ',
            'detail' => 'Capteur optique hautes performances
                        
                        Avec une précision nouvelle génération et une architecture améliorée, HERO est notre capteur gaming le plus précis jamais conçu. Fort du traitement de débit d\'images le plus rapide à ce jour, HERO dépasse les 400 IPS, offre une sensibilité allant de 100 à 16 000 ppp et ne génère ni lissage, ni filtrage, ni accélération. Le capteur HERO atteint une précision exceptionnelle et une réactivité toujours constante. Assurez-vous de personnaliser et de régler vos paramètres de résolution à l\'aide de l\'Assistant pour jeux vidéo de Logitech.1
                        
                        11 BOUTONS PROGRAMMABLES
                        
                        Commandes à portée de main
                        
                        Grâce à l\'Assistant pour jeux vidéo de Logitech, programmez vos commandes et macros favorites sur chacun des 11 boutons. Construire, s\'accroupir, foncer dans la mêlée, soigner… gardez vos coups les plus puissants à portée de main. Enregistrez jusqu\'à 5 profils différents directement sur la souris pour emporter vos paramètres partout avec vous.1
                        
                        POIDS AJUSTABLE
                        
                        Poids et équilibre personnalisables
                        
                        Ajustez la sensation et la glisse de la souris selon vos besoins. Cinq poids de 3,6 g sont livrés avec la souris G502 HERO et sont configurables dans une variété de configurations à l\'avant, à l\'arrière, sur la gauche, sur la droite et au centre. Testez l\'alignement et l\'équilibre pour trouver la configuration idéale pour optimiser vos performances gaming.
                        
                        LIGHTSYNC RVB
                        
                        Environ 16,8 millions de couleurs personnalisables
                        
                        La technologie LIGHTSYNC est la nouvelle génération RVB qui peut être pilotée par les jeux, l’audio ou l’écran pour vous offrir une expérience chromatique des plus immersives. Choisissez parmi une gamme complète de 16,8 millions de couleurs environ et synchronisez les animations et les effets d\'éclairage avec vos autres dispositifs Logitech G. Personnalisez le tout rapidement et facilement à l\'aide de l\'Assistant pour jeux vidéo de Logitech.1
                        
                        DÉTAILS CONÇUS POUR LE JEU
                        
                        Design hautes performances
                        
                        En plus des fonctions de performances et de personnalisation de base, de nombreux détails ont été soigneusement créés et conçus: des boutons principaux avec des switchs mécaniques pouvant résister à 50 millions de clics, un câble tressé avec une attache scratch, des poignées latérales en caoutchouc, un emplacement pour les poids magnétique, et bien plus encore.
                        
                        RÉSOLUTION À LA VOLÉE
                        
                        Jusqu\'à 5 paramètres de résolution.
                        
                        Basculez entre cinq paramètres de résolution maximum en un seul clic. Trois témoins lumineux de résolution vous indiquent quel paramètre est activé. Personnalisez ces paramètres de résolution avec l\'Assistant pour jeux vidéo de Logitech ou utilisez les paramètres par défaut prêts à l\'emploi.
                        
                        BOUTON SNIPER
                        
                        Changez de résolution en un clin d\'œil
                        
                        Ajoutez encore plus de contrôle à votre jeu avec un changement rapide de la résolution (de sensibilité basse à élevée). Idéalement placé sur le côté gauche de la souris, maintenez le bouton Sniper enfoncé pour passer rapidement au ciblage haute précision. Personnalisez la sensibilité du changement de résolution dans l\'Assistant pour jeux vidéo de Logitech ou modifiez-la pour exécuter entièrement une autre fonction.
                        
                        MÉMOIRE INTÉGRÉE
                        
                        Enregistrez jusqu\'à 5 profils
                        
                        Utilisez l\'Assistant pour jeux vidéo de Logitech pour enregistrer vos paramètres dans chacun des cinq emplacements de mémoire de la souris afin de les emporter avec vous. Vos paramètres enregistrés fonctionneront sur n\'importe quel ordinateur sans logiciel supplémentaire ou connexion requise.
                        
                        ROULETTE DE DÉFILEMENT ULTRA-RAPIDE DOUBLE MODE
                        
                        Vitesse ou précision
                        
                        Déverrouillez la molette de défilement pour un défilement continu ultra-rapide pour parcourir rapidement de longues pages ou verrouillez-la pour un défilement de précision par paillers. La lourde roue en métal offre un contrôle sûr, fluide et satisfaisant pour chaque mode. ',

            'prix' => '8.000',
            'image_produit' => 'produit-13.jpg',
            'categorie_id' => 4,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);


        \Illuminate\Support\Facades\DB::table('produits')->insert([
            'nom' => 'Souris sans fil Gaming Logitech Lightspeed G305 Noir ',
            'description' => 'SOURIS GAMING SANS FIL LIGHTSPEED POUR TOUS.
                Le capteur HERO nouvelle génération de la souris gaming G305 sans fil LIGHTSPEED offre des performances de 12 000 ppp, tandis que la connectivité sans fil LIGHTSPEED offre un taux de rapport ultra-rapide d\'une milliseconde. La souris G305 dispose d\'une autonomie de 250 heures de jeu fournie par une pile AA et d\'un témoin lumineux vous informant quand votre pile est bientôt épuisée. Grâce à sa conception mécanique efficace, la souris G305 ne pèse que 99 grammes et offre une maniabilité accrue. Grâce à sa forme compacte et résistante et à l\'espace de rangement intégré de son nano-récepteur, la souris G305 est un excellent compagnon de voyage toujours prêt pour le jeu grâce à ses 6 boutons programmables. Au final, cette souris sans fil LIGHTSPEED est prête à l\'emploi et très abordable. ',

            'prix' => '5.000',
            'image_produit' => 'produit-14.jpg',
            'categorie_id' => 4,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);



    }
}
