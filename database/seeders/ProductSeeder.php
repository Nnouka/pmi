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
            'description' => 'Improves efficacy|Reduces  procedure time|Secure solution',
            'info' => 'Polyp removal solution (10ml), sterile medical device',
            'composition' => 'Sodium hyaluronate, indigo carmine, saline',
            'packaging' => 'Solution supplied in a 10 ml clear glass antibiotic bottle',
            'intended_use' => 'Blue Lift is a product intended for temporary use. It is injected into the submucosa below the lesion to be excised. Blue Lift works immediately after injection. | Once injected into the submucosa, Blue Lift removes the mucous membrane from the muscularis propria (muscle layer), allowing a loop to be placed around the base of the polyp.',
            'images' => 'images/products/blue_lift.png,images/products/blue_lift1.png,images/products/blue_lift2.png,images/products/blue_lift3.png,images/products/blue_lift4.png,images/products/blue_lift5.png,images/products/blue_lift6.png',
            'manufacturer_id' => $manufacturer->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => '185 Cender\'s',
            'slug' => 'cenders',
            'description' => 'Cender\'s, Endoscopic marker 5mL - Sterile pigment for endopigmentation',
            'info' => 'Preoperative and prechemotherapy marking of breast tumours',
            'composition' => '10% peat charcoal suspension in PPI water. Single-use product. | Cardbord box containing 10 vials',
            'packaging' => '(endoscopic marking of polyps or tumours for surgical identification or extended endoscopic and histological monitoring following removal of polyps or tumours).',
            'intended_use' => 'Use the  product on its own with no added substances. | Cardboard box containing 10 vials',
            'equipment_methods' => 'Prospective monocentric preliminary study:|02/2015 to 07/2016 at CAL | 72 patients refrred as part of the initial breast cancer work-up (≠ recurrences) with | - ultrasound detection of suspicious nodes | - performance of ultrasound-guided cytopuncture (with aspiration) | - then charcoal black staining at the same time (0.2 to 0.5 ml) ± AL',
            'images' => 'images/products/cenders.png,images/products/cenders1.png,images/products/cenders2.png,images/products/cenders3.png,images/products/cenders4.png',
            'outcome_images' => 'images/products/cenders_outcome.png,images/products/cenders_outcome1.png,images/products/cenders_outcome2.png,images/products/cenders_outcome3.png,images/products/cenders_outcome4.png',
            'manufacturer_id' => $manufacturer->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Indigo Carmine 1% - 10 ML x 10',
            'slug' => 'indigo',
            'description' => 'Highlights anomalies in the mucosal relief (ulceration, fissures, uneven surfaces) and marks tumour margins when the limites are not clearly visible.',
            'info' => 'Detects small, non-polypoid lesions | Improves mucosal relief view | Characterises lesion type',
            'composition' => '1% indigo suspension in water for sprayable preparation for marking | - 10 ml bottle, box of 10 units',
            'intended_use' => 'The indigo carmine solution is sprayed onto the area to be examined. The operation can be repeated if necessary. If the colouring is too strong, it can be reduced by rinsing.|Source:SFED website: www.sfed.org|Photos by Jean-Marc CANARD|Colonic mucosa coloured using indigo carmine|Vilosities after coloring|Flat adenoma of the colon after coloring',
            'equipment_methods' => 'Recommended concentration for use: 0.2% to 0.4%',
            'images' => 'images/products/indigo.png,images/products/indigo1.png,images/products/indigo2.png,images/products/indigo3.png,images/products/indigo4.png',
            'outcome_images' => 'images/products/indigo_outcome.png,images/products/indigo_outcome1.png,images/products/indigo_outcome2.png,images/products/indigo_outcome3.png,images/products/indigo_outcome4.png',
            'manufacturer_id' => $manufacturer->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
