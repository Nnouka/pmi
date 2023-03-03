<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manufacturer = DB::table('manufacturers')->where('name', 'Derm Tech France')->first();
        DB::table('products')->insert([
            'name' => 'Blue Lift',
            'slug' => 'bluelift',
            'description' => 'Solution d’enlèvement de polypes (10 ml), dispositif médical stérile',
            'info' => 'Solution d’enlèvement de polypes (10 ml), dispositif médical stérile',
            'composition' => 'Hyaluronate de sodium, carmin d’indigo, solution saline',
            'packaging' => 'Solution fournie dans un flacon pour antibiotique en verre transparent d’une contenance de 10 ml (rempli jusqu’à 9,7 ml), scellé par un bouchon en butyle et fermé par un capuchon en aluminium (flacon à sertir).|La solution Blue Lift est stérilisée, transférée dans un flacon jetable prêt-à- l’emploi, puis fournie dans une boîte contenant 10 flacons à usage unique.',
            'intended_use' => 'Blue Lift est un produit destiné à un usage temporaire, qui s’utilise par injection dans la sous-muqueuse située en dessous de la lésion à exciser. Blue Lift agit immédiatement après avoir été injecté.|Une fois injecté dans la sous-muqueuse, Blue Lift éloigne la muqueuse de la muscularis propria (couche musculaire) afin de permettre l’installation d’une anse autour de la base du polype.',
            'images' => 'images/products/blue_lift.png|images/products/blue_lift1.png|images/products/blue_lift2.png|images/products/blue_lift3.png|images/products/blue_lift4.png|images/products/blue_lift5.png|images/products/blue_lift6.png',
            'manufacturer_id' => $manufacturer->id,
            'created_at' => now(),
            'updated_at' => now(),
            'certification_file' => 'Certificat de marquage BlueLift-DeepBlue',
            'tech_file' => 'TECHNICAL FILES BLUE LIFT',
            'notice_file' => 'NOTICES BLUE LIFT MULTILANGUES'
        ]);
        DB::table('products')->insert([
            'name' => '185 Cender\'s',
            'slug' => 'cenders',
            'description' => 'Cender\'s, Endoscopic marker 5mL - Sterile pigment for endopigmentation',
            'info' => 'Cender\'s, Endoscopic marker 5mL - Sterile pigment for endopigmentation',
            'composition' => 'Eau PPI, Charbon de Tourbe, (conforme au US Food chemicals codex).',
            'packaging' => 'Suspension de Charbon de tourbe à 10% dans de l’eau PPI.|Suspension à 10% dans flacon verre type antibiotique de 8ml (rempli à 5ml), bouché par bouchon butyl et serti par une capsule en aluminium.|Conditionné dans une boite cartonnée contenant 10 flacons.',
            'intended_use' => 'Les accessoires indispensables sont : l\'aiguille (elle doit être livrée stérile et sous double emballage).|Pour chaque accessoire, se reporter à sa notice d\'utilisation.',
            'equipment_methods' => 'Prospective monocentric preliminary study:|02/2015 to 07/2016 at CAL | 72 patients refrred as part of the initial breast cancer work-up (≠ recurrences) with | - ultrasound detection of suspicious nodes | - performance of ultrasound-guided cytopuncture (with aspiration) | - then charcoal black staining at the same time (0.2 to 0.5 ml) ± AL',
            'images' => 'images/products/cenders.png|images/products/cenders1.png|images/products/cenders2.png|images/products/cenders3.png|images/products/cenders4.png',
            'outcome_images' => 'images/products/cenders_outcome.png|images/products/cenders_outcome1.png|images/products/cenders_outcome2.png|images/products/cenders_outcome3.png|images/products/cenders_outcome4.png',
            'manufacturer_id' => $manufacturer->id,
            'created_at' => now(),
            'updated_at' => now(),
            'certification_file' => 'CERTIFICAT CE 2021 185 CENDERS',
            'tech_file' => 'TECHNICAL FILES CENDERS',
            'notice_file' => 'NOTICES CENDERS MULTILANGUES'
        ]);
        DB::table('products')->insert([
            'name' => 'Indigo Carmine 1% - 10 ML x 10',
            'slug' => 'indigo',
            'description' => 'L’indigo carmin permet de mieux détailler les anomalies du relief muqueux (ulcération, fissure, irrégularité de surface), et de marquer ainsi les marges d’une tumeur lorsque les limites en sont imprécises.',
            'info' => 'L’indigo carmin permet de mieux détailler les anomalies du relief muqueux (ulcération, fissure, irrégularité de surface), et de marquer ainsi les marges d’une tumeur lorsque les limites en sont imprécises.',
            'composition' => 'Suspension d\'indigo à 1% dans de l’eau pour préparation pulvérisable pour marquage, flacon de 10ml, boîte de 10 unités',
            'intended_use' => 'Pulvérisation de la solution d’indigo carmin sur la zone à étudier.|L’opération peut être répétée, si nécessaire. Si la coloration est trop marquée elle peut être atténuée par rinçage.|Dilution recommandée en endoscopie digestive de 0,2%. La dilution se fait avec du sérum physiologique.',
            'equipment_methods' => 'Recommended concentration for use: 0.2% to 0.4%',
            'images' => 'images/products/indigo.png|images/products/indigo1.png|images/products/indigo2.png|images/products/indigo3.png|images/products/indigo4.png',
            'outcome_images' => 'images/products/indigo_outcome.png|images/products/indigo_outcome1.png|images/products/indigo_outcome2.png|images/products/indigo_outcome3.png|images/products/indigo_outcome4.png',
            'manufacturer_id' => $manufacturer->id,
            'created_at' => now(),
            'updated_at' => now(),
            'certification_file' => 'CERTIFICAT ISO 13485 2020',
            'tech_file' => 'TECHNICALFILES INDIGO',
            'notice_file' => 'NOTICES INDIGO MULTILANGUES'
        ]);
    }
}
