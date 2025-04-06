<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Création des catégories
        $sport = new Category();
        $sport->setName('Chaussures de sport');
        $manager->persist($sport);

        $classique = new Category();
        $classique->setName('Chaussures classiques');
        $manager->persist($classique);

        // CHAUSSURES CLASSIQUES
        // Produit 1 - Solsbury Easy
        $product1 = new Product();
        $product1->setName('Solsbury Easy')
                 ->setDescription(
                     "<p><strong>Solsbury Easy</strong> – Chaussure en cuir marron foncé élégante et confortable.</p>
                      <p>La Solsbury Easy est idéale pour ceux qui recherchent l'élégance sans compromis sur le confort. Fabriquée en cuir marron foncé de haute qualité, elle combine style classique et modernité, parfaite pour le bureau, les sorties élégantes ou les occasions spéciales.</p>
                      <ul>
                        <li><strong>Tige en cuir marron foncé premium</strong> : texture raffinée et résistance dans le temps.</li>
                        <li><strong>Confort supérieur</strong> : doublure intérieure douce et semelle rembourrée épousant la forme du pied.</li>
                        <li><strong>Semelle en caoutchouc antidérapante</strong> : excellente adhérence et stabilité sur toutes surfaces.</li>
                        <li><strong>Design polyvalent</strong> : coupe soignée adaptée à une tenue formelle ou décontractée.</li>
                        <li><strong>Disponible en plusieurs tailles</strong> : pour un ajustement parfait.</li>
                      </ul>
                      <p>La Solsbury Easy est l'alliance parfaite entre confort et élégance. Sa couleur marron foncé riche et son cuir de qualité en font un modèle durable et intemporel, indispensable dans un dressing moderne.</p>"
                 )
                 ->setPrice(180)
                 ->setImage('class-brownlong.webp')
                 ->setCategory($classique);
        $manager->persist($product1);

        // Produit 2 - Brown Town
        $product2 = new Product();
        $product2->setName('Brown Town')
                 ->setDescription(
                     "<p><strong>Brown Town</strong> – Le parfait équilibre entre style, confort et durabilité.</p>
                      <p>Conçue avec des matériaux haut de gamme, cette chaussure s'adapte à toutes les situations, que ce soit pour une journée de travail ou une sortie élégante.</p>
                      <ul>
                        <li><strong>Design moderne</strong> : silhouette élégante adaptée à un look professionnel ou décontracté.</li>
                        <li><strong>Confort exceptionnel</strong> : semelle intérieure rembourrée et respirante pour un bien-être durable.</li>
                        <li><strong>Adhérence et sécurité</strong> : semelle extérieure antidérapante idéale pour toutes les surfaces.</li>
                        <li><strong>Matériaux de qualité</strong> : cuir véritable assurant longévité et entretien facile.</li>
                      </ul>
                      <p>Avec Brown Town, alliez raffinement et fonctionnalité en toute simplicité.</p>"
                 )
                 ->setPrice(400.00)
                 ->setImage('class-cuireb.webp')
                 ->setCategory($classique);
        $manager->persist($product2);
             
        // Produit 3 - Oxfort Elite

        $product3 = new Product();
        $product3->setName('Oxford Elite')
                ->setDescription(
                    "<p><strong>Oxford Elite</strong> – L'élégance intemporelle du cuir noir dans sa forme la plus raffinée.</p>
                    <p>Ces chaussures Oxford en cuir noir représentent le summum de l'élégance masculine classique, associant savoir-faire traditionnel et confort moderne pour une expérience vestimentaire exceptionnelle.</p>
                    <ul>
                      <li><strong>Cuir de veau pleine fleur</strong> : finition lisse et brillante, résistance exceptionnelle à l'usure.</li>
                      <li><strong>Doublure en cuir véritable</strong> : respirabilité optimale et confort prolongé même lors des journées les plus longues.</li>
                      <li><strong>Semelle Goodyear Welted</strong> : construction premium permettant de resemeler la chaussure pour une durabilité accrue.</li>
                      <li><strong>Finition à la main</strong> : polissage minutieux pour un éclat subtil qui sublime le cuir noir profond.</li>
                      <li><strong>Laçage fermé</strong> : silhouette épurée typique du style Oxford, idéale pour les occasions formelles.</li>
                    </ul>
                    <p>Les Oxford Elite sont l'investissement idéal pour l'homme exigeant qui recherche une chaussure à la fois sophistiquée et durable, capable de traverser les tendances et les saisons avec une élégance constante.</p>"
               )
                 ->setPrice(400.00)
                 ->setImage('class-cuireblack.webp')
                 ->setCategory($classique);
        $manager->persist($product3);
         
        // Produit 4 - Alto Terra
        $product4 = new Product();
        $product4->setName('Alto Terra')
                 ->setDescription(
                     "<p><strong>Alto Terra</strong> – Bottines longues en daim marron, alliant élégance rustique et confort moderne.</p>
                      <p>Conçues pour les esprits libres et raffinés, ces bottines épousent la silhouette du pied tout en assurant une tenue parfaite jusqu'au mollet.</p>
                      <ul>
                        <li><strong>Texture douce</strong> : finition en daim agréable au toucher.</li>
                        <li><strong>Teinte chaude</strong> : couleur marron inspirée des forêts d'automne.</li>
                        <li><strong>Style polyvalent</strong> : convient aussi bien à une tenue casual chic qu'à un look habillé.</li>
                      </ul>
                      <p>Les Alto Terra vous accompagnent avec discrétion et caractère, que ce soit pour une balade citadine ou une escapade nature.</p>"
                 )
                 ->setPrice(400.00)
                 ->setImage('class-marronlong.webp')
                 ->setCategory($classique);
        $manager->persist($product4);
        
        // Produit 5 - Badell Lace
        $product5 = new Product();
        $product5->setName('Badell Lace')
                 ->setDescription(
                     "<p><strong>Badell Lace</strong> – Une chaussure chic et décontractée qui allie design historique et confort moderne.</p>
                      <ul>
                        <li><strong>Tige en nubuck premium</strong> : coloris châtaigne pour un style naturel et élégant.</li>
                        <li><strong>Semelle Contour Cushion</strong> : souple, elle offre un amorti durable à chaque pas.</li>
                        <li><strong>Technologie EXTRALIGHT®</strong> : semelle EVA légère et flexible pour une liberté de mouvement optimale.</li>
                        <li><strong>Détails authentiques</strong> : lacets classiques et logo griffé pour une touche de style intemporel.</li>
                      </ul>
                      <p>La Badell Lace, c'est l'alliance parfaite entre tradition et modernité pour accompagner votre quotidien avec élégance.</p>"
                 )
                 ->setPrice(150.00)
                 ->setImage('class-redbig.webp')
                 ->setCategory($classique);
        $manager->persist($product5);
        
        // Produit 6 - Luxor Premium
        $product6 = new Product();
        $product6->setName('Luxor Premium')
                 ->setDescription(
                     "<p><strong>Luxor Premium</strong> – Un mélange parfait de style intemporel et de confort inégalé.</p>
                      <p>Fabriquées en cuir véritable de qualité supérieure, ces chaussures incarnent le savoir-faire artisanal et s'adressent aux amateurs de raffinement.</p>
                      <ul>
                        <li><strong>Cuir pleine fleur haut de gamme</strong> : esthétique raffinée et grande durabilité.</li>
                        <li><strong>Doublure en cuir souple</strong> : épouse naturellement la forme du pied pour un confort maximal.</li>
                        <li><strong>Semelle extérieure en caoutchouc antidérapant</strong> : sécurité et résistance à l'usure.</li>
                        <li><strong>Design élégant</strong> : parfait pour les costumes, chinos ou jeans pour un style chic-décontracté.</li>
                      </ul>
                      <p>Les Luxor Premium sont un investissement dans la qualité et le style, conçues pour durer et sublimer chaque tenue.</p>"
                 )
                 ->setPrice(600.00)
                 ->setImage('class-redbrown.webp')
                 ->setCategory($classique);
        $manager->persist($product6);
        
        // CHAUSSURES DE SPORT
        // Produit 7 - Dunk Blue
        $product7 = new Product();
        $product7->setName('Dunk Blue')
                 ->setDescription(
                     "<p><strong>Dunk Blue</strong> – Une chaussure née pour le basketball, repensée pour le skate.</p>
                      <p>Initialement conçue pour la performance sur les terrains de basketball, la Dunk Blue a évolué pour répondre aux exigences du skate, tout en conservant son style emblématique.</p>
                      <ul>
                        <li><strong>Empeigne en daim</strong> : douce et résistante à l'usure.</li>
                        <li><strong>Semelle intermédiaire en mousse</strong> : légèreté et amorti réactif.</li>
                        <li><strong>Semelle extérieure en caoutchouc</strong> : adhérence optimale grâce au point de pivot des chaussures de basket.</li>
                        <li><strong>Deux paires de lacets</strong> : personnalisez votre style selon vos envies.</li>
                      </ul>
                      <p>Un modèle polyvalent pour briller autant sur la planche que dans la rue.</p>"
                 )
                 ->setPrice(180.00)
                 ->setImage('sport-bluestar.png')
                 ->setCategory($sport);
        $manager->persist($product7);
          
        // Produit 8 - Jumper Red
        $product8 = new Product();
        $product8->setName('Jumper Red')
                 ->setDescription(
                     "<p><strong>Jumper Red</strong> – La chaussure pensée pour les athlètes de saut.</p>
                      <p>Conçue pour le saut en longueur, le triple saut et d'autres disciplines, la Jumper Red maximise vos performances avec confort et stabilité.</p>
                      <ul>
                        <li><strong>Pointes à l'avant-pied</strong> : adhérence optimale sur piste et planches d'appel.</li>
                        <li><strong>Adhérence secondaire au talon</strong> : contrôle fluide à l'approche de l'appel.</li>
                        <li><strong>Talon rembourré</strong> : absorption des chocs lors des réceptions les plus intenses.</li>
                        <li><strong>Base élargie</strong> : meilleure stabilité et répartition de la force à chaque impulsion.</li>
                      </ul>
                      <p>Un allié indispensable pour les sportifs en quête de performances et de records sur la piste.</p>"
                 )
                 ->setPrice(180.00)
                 ->setImage('sport-redglow.png')
                 ->setCategory($sport);
        $manager->persist($product8);
          
        // Produit 9 - Red Skater
        $product9 = new Product();
        $product9->setName('Red Skater')
                 ->setDescription(
                     "<p><strong>Red Skater</strong> – L'équilibre parfait entre style, durabilité et performance pour le skate.</p>
                      <p>Inspirée des modèles iconiques du skate, cette chaussure combine des matériaux robustes avec un design moderne pensé pour les skateurs exigeants.</p>
                      <ul>
                        <li><strong>Cuir résistant</strong> : conçu pour supporter l'usure des sessions intenses.</li>
                        <li><strong>Semelle en caoutchouc antidérapante</strong> : garantit une excellente adhérence sur la planche.</li>
                        <li><strong>Coupe montante</strong> : offre un maintien supérieur et protège la cheville.</li>
                        <li><strong>Design épuré</strong> : idéal aussi bien sur la planche que dans la rue.</li>
                      </ul>
                      <p>La Red Skater est la chaussure de référence pour allier performance et style urbain.</p>"
                 )
                 ->setPrice(500.00)
                 ->setImage('sport-redtop.png')
                 ->setCategory($sport);
        $manager->persist($product9);
          
        // Produit 10 - White Glow
        $product10 = new Product();
        $product10->setName('White Glow')
                  ->setDescription(
                      "<p><strong>White Glow</strong> – Personnalise ton style et affiche tes progrès.</p>
                       <p>La Metcon 9 White Glow est conçue pour les athlètes qui veulent allier performance, originalité et puissance dans leurs entraînements quotidiens.</p>
                       <ul>
                         <li><strong>Grip renforcé pour grimper à la corde</strong> : stabilité et sécurité pendant l'effort.</li>
                         <li><strong>Semelle personnalisable</strong> : effets marbrés, caoutchouc gomme ou finitions classiques au choix.</li>
                         <li><strong>Passants de lacets modulables</strong> : personnalise selon ton style d'entraînement (force, agilité, endurance...).</li>
                         <li><strong>Fini chromé</strong> : une touche esthétique unique et brillante.</li>
                       </ul>
                       <p>Idéale pour attirer tous les regards à la salle, tout en repoussant tes limites.</p>"
                  )
                  ->setPrice(169.99)
                  ->setImage('sport-whiteglow.png')
                  ->setCategory($sport);
        $manager->persist($product10);
          
        // Exécution d'un seul flush à la fin pour toutes les entités
        $manager->flush();
    }
}