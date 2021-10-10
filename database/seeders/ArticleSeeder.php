<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articlesSeeds = $this->source();
        foreach ($articlesSeeds as $a) {
            Article::factory()->create([
                'articleNumber' => $a->articleNumber,
                'manufacturer' => $a->manufacturer,
                'model' => $a->model,
                'rank' => $a->rank,
                'category' => $a->category,
                'price' => $a->price,
                'rating' => $a->rating,
                'ratingCount' => $a->ratingCount,
            ]);
        }

    }


    private function source()
    {
        return json_decode('[
        {
            "articleNumber": 106865,
            "manufacturer": "beyerdynamic",
            "model": "DT-990 Pro",
            "rank": "12",
            "category": "ZUKOSK",
            "price": "129",
            "rating": "9.5493",
            "ratingCount": "1762"
        },
        {
            "articleNumber": 111972,
            "manufacturer": "Sennheiser",
            "model": "E 945 Complete Bundle",
            "rank": "1227",
            "category": "MIGEDY",
            "price": "188",
            "rating": "9.8666",
            "ratingCount": "45"
        },
        {
            "articleNumber": 114508,
            "manufacturer": "Rode",
            "model": "Procaster",
            "rank": "239",
            "category": "MIGR",
            "price": "167",
            "rating": "9.6413",
            "ratingCount": "290"
        },
        {
            "articleNumber": 115991,
            "manufacturer": "Harley Benton",
            "model": "Electric Guitar Kit T-Style",
            "rank": "1700",
            "category": "GIEGTE",
            "price": "79",
            "rating": "8.5777",
            "ratingCount": "1229"
        },
        {
            "articleNumber": 125763,
            "manufacturer": "Fender",
            "model": "Texas Special Strat Set",
            "rank": "1778",
            "category": "GITAEGSC",
            "price": "219",
            "rating": "9.6353",
            "ratingCount": "181"
        },
        {
            "articleNumber": 127467,
            "manufacturer": "Sonor",
            "model": "SKX 100 Soprano Xylophone",
            "rank": "74827",
            "category": "TROSOFXPSO",
            "price": "489",
            "rating": null,
            "ratingCount": "0"
        },
        {
            "articleNumber": 129409,
            "manufacturer": "Millenium",
            "model": "MS 2001",
            "rank": "13144",
            "category": "ZUSTMI",
            "price": "26.5",
            "rating": "8.3094",
            "ratingCount": "1118"
        },
        {
            "articleNumber": 135317,
            "manufacturer": "Yamaha",
            "model": "C40",
            "rank": "216",
            "category": "GIKO44",
            "price": "123",
            "rating": "9.1557",
            "ratingCount": "289"
        },
        {
            "articleNumber": 142052,
            "manufacturer": "Neumann",
            "model": "KMS 105 BK",
            "rank": "635",
            "category": "MIGEKO",
            "price": "575",
            "rating": "9.8421",
            "ratingCount": "266"
        },
        {
            "articleNumber": 152566,
            "manufacturer": "Thomann",
            "model": "FL-200 Flute",
            "rank": "705",
            "category": "BLHQGK",
            "price": "149",
            "rating": "8.7014",
            "ratingCount": "134"
        },
        {
            "articleNumber": 157819,
            "manufacturer": "Harley Benton",
            "model": "D-120CE BK",
            "rank": "100",
            "category": "GIWEDR",
            "price": "79",
            "rating": "8.7047",
            "ratingCount": "1189"
        },
        {
            "articleNumber": 165104,
            "manufacturer": "Oktava",
            "model": "MK 012-01 MSP2 Pair",
            "rank": "1104",
            "category": "MIKK",
            "price": "307",
            "rating": "9.3641",
            "ratingCount": "390"
        },
        {
            "articleNumber": 174067,
            "manufacturer": "Neumann",
            "model": "TLM 103 Studio Set",
            "rank": "916",
            "category": "MIGR",
            "price": "1139",
            "rating": "9.5789",
            "ratingCount": "133"
        },
        {
            "articleNumber": 187424,
            "manufacturer": "Startone",
            "model": "CG 851 3/4",
            "rank": "3672",
            "category": "GIKO34",
            "price": "39.9",
            "rating": "8.0569",
            "ratingCount": "527"
        },
        {
            "articleNumber": 197880,
            "manufacturer": "Shure",
            "model": "Beta 58 A Set",
            "rank": "3286",
            "category": "MISE",
            "price": "155",
            "rating": "9.7671",
            "ratingCount": "146"
        },
        {
            "articleNumber": 201308,
            "manufacturer": "Jakob Winter",
            "model": "JW 370 Trumpet Perinet",
            "rank": "70678",
            "category": "BLZUETTR",
            "price": "109",
            "rating": "10",
            "ratingCount": "4"
        },
        {
            "articleNumber": 202108,
            "manufacturer": "Thomastik",
            "model": "Spirocore G Cello 4/4 Tung. L",
            "rank": "94883",
            "category": "TRSTCZCSSG",
            "price": "84.9",
            "rating": "10",
            "ratingCount": "1"
        },
        {
            "articleNumber": 210473,
            "manufacturer": "Allen & Heath",
            "model": "ZED-12FX",
            "rank": "2862",
            "category": "PAMIKM",
            "price": "449",
            "rating": "9.6229",
            "ratingCount": "122"
        },
        {
            "articleNumber": 223985,
            "manufacturer": "Harley Benton",
            "model": "TE-52 NA Vintage Series",
            "rank": "1903",
            "category": "GIEGTE",
            "price": "149",
            "rating": "9.1849",
            "ratingCount": "1141"
        },
        {
            "articleNumber": 253041,
            "manufacturer": "Sennheiser",
            "model": "MME 865 Replacement Grill G3",
            "rank": "90520",
            "category": "MIZUER",
            "price": "39.9",
            "rating": "10",
            "ratingCount": "4"
        },
        {
            "articleNumber": 253473,
            "manufacturer": "Mutec",
            "model": "MC-6",
            "rank": "32043",
            "category": "STDW",
            "price": "599",
            "rating": "10",
            "ratingCount": "3"
        },
        {
            "articleNumber": 255975,
            "manufacturer": "Harley Benton",
            "model": "Electric Guitar Kit DC Style",
            "rank": "4573",
            "category": "GIEGSG",
            "price": "99",
            "rating": "8.0688",
            "ratingCount": "523"
        },
        {
            "articleNumber": 292760,
            "manufacturer": "Startone",
            "model": "SCL- 65 Bb- Clarinet",
            "rank": "709",
            "category": "BLHKBB",
            "price": "169",
            "rating": "8.507",
            "ratingCount": "71"
        },
        {
            "articleNumber": 304849,
            "manufacturer": "Millenium",
            "model": "BS-2211B MKII Set",
            "rank": "1137",
            "category": "ZUSTBO",
            "price": "47",
            "rating": "8.7716",
            "ratingCount": "3258"
        },
        {
            "articleNumber": 304851,
            "manufacturer": "the box pro",
            "model": "TP 108 MA",
            "rank": "19366",
            "category": "PALPAM",
            "price": "179",
            "rating": "8.862",
            "ratingCount": "58"
        },
        {
            "articleNumber": 306801,
            "manufacturer": "Harley Benton",
            "model": "Custom Line Nashville Nylon NT",
            "rank": "7779",
            "category": "GIKOSO",
            "price": "249",
            "rating": "8.7169",
            "ratingCount": "212"
        },
        {
            "articleNumber": 338291,
            "manufacturer": "AKAI Professional",
            "model": "MPK 249",
            "rank": "4002",
            "category": "TAMA49",
            "price": "329",
            "rating": "9.3211",
            "ratingCount": "109"
        },
        {
            "articleNumber": 345158,
            "manufacturer": "Rode",
            "model": "NT-USB",
            "rank": "60",
            "category": "MIUS",
            "price": "151",
            "rating": "9.4515",
            "ratingCount": "361"
        },
        {
            "articleNumber": 351918,
            "manufacturer": "JBL",
            "model": "Eon 615",
            "rank": "992",
            "category": "PALPAF",
            "price": "398",
            "rating": "9.5024",
            "ratingCount": "201"
        },
        {
            "articleNumber": 369572,
            "manufacturer": "beyerdynamic",
            "model": "DT-1770 Pro 250 Ohm",
            "rank": "220",
            "category": "ZUKOSK",
            "price": "425",
            "rating": "9.4931",
            "ratingCount": "146"
        },
        {
            "articleNumber": 374853,
            "manufacturer": "Harley Benton",
            "model": "HB-35Plus Cherry",
            "rank": "631",
            "category": "GIEGES",
            "price": "249",
            "rating": "9.5189",
            "ratingCount": "158"
        },
        {
            "articleNumber": 410340,
            "manufacturer": "Harley Benton",
            "model": "ST-Acoustic Black",
            "rank": "669",
            "category": "GIWESO",
            "price": "149",
            "rating": "8.6842",
            "ratingCount": "38"
        },
        {
            "articleNumber": 420191,
            "manufacturer": "Airturn",
            "model": "PED Pro",
            "rank": "6978",
            "category": "STCOSO",
            "price": "79",
            "rating": "7.5629",
            "ratingCount": "151"
        },
        {
            "articleNumber": 428224,
            "manufacturer": "Millenium",
            "model": "MPS-850 E-Drum Set",
            "rank": "5",
            "category": "DREDSE",
            "price": "598",
            "rating": "8.9797",
            "ratingCount": "690"
        },
        {
            "articleNumber": 430651,
            "manufacturer": "Bose",
            "model": "S1 Pro System",
            "rank": "20",
            "category": "PALPAF",
            "price": "549",
            "rating": "9.4448",
            "ratingCount": "299"
        },
        {
            "articleNumber": 432646,
            "manufacturer": "Clavia Nord",
            "model": "Electro 6D 61",
            "rank": "6467",
            "category": "TASP",
            "price": "1629",
            "rating": "9.7142",
            "ratingCount": "21"
        },
        {
            "articleNumber": 439746,
            "manufacturer": "Roland",
            "model": "TD-17KVX E-Drum Set Bundle",
            "rank": "595",
            "category": "DREDSE",
            "price": "2098",
            "rating": null,
            "ratingCount": "0"
        },
        {
            "articleNumber": 454281,
            "manufacturer": "Midas",
            "model": "M32R Live",
            "rank": "304",
            "category": "PAMIDM",
            "price": "1898",
            "rating": "9.8095",
            "ratingCount": "42"
        },
        {
            "articleNumber": 458581,
            "manufacturer": "Yamaha",
            "model": "YDP-S54 WH",
            "rank": "6306",
            "category": "TADPCD",
            "price": "1049",
            "rating": "9.25",
            "ratingCount": "8"
        },
        {
            "articleNumber": 493572,
            "manufacturer": "Thomann",
            "model": "DP-28 Plus",
            "rank": "146",
            "category": "TASP",
            "price": "395",
            "rating": "8.8095",
            "ratingCount": "42"
        },
        {
            "articleNumber": 494580,
            "manufacturer": "Adam",
            "model": "T7V ISO Pad Bundle",
            "rank": "948",
            "category": "STMOAN",
            "price": "379",
            "rating": null,
            "ratingCount": "0"
        },
        {
            "articleNumber": 499488,
            "manufacturer": "Blackmagic Design",
            "model": "Pocket Cinema Camera 6K",
            "rank": "363",
            "category": "VIPECACA",
            "price": "1829",
            "rating": "9.6666",
            "ratingCount": "18"
        },
        {
            "articleNumber": 514401,
            "manufacturer": "Blackmagic Design",
            "model": "ATEM Mini Extreme ISO",
            "rank": "268",
            "category": "VIPEVM",
            "price": "1219",
            "rating": "10",
            "ratingCount": "10"
        },
        {
            "articleNumber": 514740,
            "manufacturer": "Rode",
            "model": "Wireless GO II",
            "rank": "13",
            "category": "MIWILA",
            "price": "279",
            "rating": "9.3846",
            "ratingCount": "39"
        }
    ]');
    }
}
