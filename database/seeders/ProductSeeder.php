<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        $values = [
            [
                "name" => "iS Clinical Cleansing Complex (6 fl. oz.)",
                "price" => 459,
                "category" => "Cleanser",
                "description" => "iS Clinical Cleansing Complex retextures your skin to give you a smooth, blemish-free complexion. White willow bark exfoliates and breaks up pore-clogging oil to boost cell turnover and tighten the appearance of your pores. Antioxidants derived from chamomile and centella asiatica heal skin damage and prevent free radicals from wreaking havoc on your complexion. This resurfacing gel wash lathers to remove makeup and assist in shaving.",
                "image" => "1660135799-hNSB3QsATCFsBOwagveswrazGK3elU9hBV1QUixX.webp",
            ],
            [
                "name" => "MACRENE ACTIVES HIGH PERFORMANCE FACE SERUM",
                "price" => "195",
                "category" => "Serum",
                "description" => "A highly active, lightweight serum that soothes, hydrates, firms, and evens skin.

                Proven to lift and tighten crepiness while reducing blotches and evening skin tone, this supercharged serum repairs the skin barrier while assisting in DNA restoration. The plant-based formula is packed with ingredients that target everything from pollution (vitamin C, vitamin E, and coffee seed extract) to fine lines (red algae, silver ear mushroom, and watermelon extracts) to dehydration (jojoba esters, sunflower oil extract, and glycerin) in one simple",
                "image" => "1658826457-ukGkF5y4uSYXvT4rhz36LB9C5cPie65pP2WRwNVR.jpg",
            ],
            [
                "name" => "SkinMedica AHA/BHA Exfoliating Cleanser (6 fl. oz.)",
                "price" => 48,
                "category" => "Exforliator",
                "description" => "SkinMedica's AHA/BHA Exfoliating Cleanser combines alpha and beta hydroxy acids to remove dead cells and other impurities from your skin to enhance a smoother and brighter complexion. Round soft jojoba spheres provide gentle exfoliating action while lavender extract tones and soothes inflammation. Mildly astringent citrus oils minimize large pores for a radiant and refreshed appearance.",
                "image" => "1658826508-dqGJnO5u0rvE1neHO6XFHvwCzynFnL91Hf0TqASE.webp",
            ],
            [
                "name" => "SkinCeuticals C E Ferulic (1 fl. oz.)",
                "price" => 169,
                "category" => "Treatment",
                "description" => "SkinCeuticals' C E Ferulic features a synergistic antioxidant combination of ferulic acid and pure vitamin C and E to enhance your skin's protection against environmental damage caused by free radicals. In addition to antioxidant protective benefits, this formula improves signs of aging and photodamage to reduce the appearance of lines and wrinkles while firming and brightening your complexion. Lastly, this powerful formula helps neutralize free radicals induced by UVA/UVB, infrared radiation (IRA) and ozone pollution (O3).",
                "image" => "1658827679-KnHtFOWtcSifKfbAAtdGzp6dG8nz0Uho9xV82FEA.webp",
            ],
            [
                "name" => "boscia MakeUp-BreakUp Cool Cleansing Oil (5 fl. oz.)",
                "price" => 37,
                "category" => "Face Oil",
                "description" => "Perfect for all skin types, boscia's MakeUp BreakUp Cool Cleansing Oil effectively removes oil, makeup and dirt buildup while calming inflamed skin. Formulated with a blend of willowherb, jojoba and geranium, this face wash reduces free radical damage, dryness and balances sebum production.",
                "image" => "1658827728-JKou8pdfetckY7tKuw7oqEjTxFq3ZBAJLGcwHcoB.webp",
            ],
            [
                "name" => "EltaMD UV Clear Broad-Spectrum SPF 46 (1.7 oz.)",
                "price" => 39,
                "category" => "Sunscreen",
                "description" => "UV Clear Broad-Spectrum SPF 46 by EltaMD provides protection to your complexion to shield your skin from harmful UVA and UVB rays. Fragrance-free, this face sunscreen's smooth formula includes sodium hyaluronate to moisturize while lactic acid refines the skin to clear pores and reduce shine.",
                "image" => "1658990608-asWIPFZfNyQ3OXpgwIlWq9shrYikfbDdUPOOsOtQ.webp",
            ],

        ];

        foreach ($values as $value) {
            Product::create($value);
        }
    }
}
