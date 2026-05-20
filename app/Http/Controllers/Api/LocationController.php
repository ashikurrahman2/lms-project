<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    /* ========================
        DIVISIONS
    ======================== */
    public function divisions()
    {
        return response()->json([
            "Dhaka",
            "Chattogram",
            "Rajshahi",
            "Khulna",
            "Barishal",
            "Sylhet",
            "Rangpur",
            "Mymensingh"
        ]);
    }

    /* ========================
        DISTRICTS
    ======================== */
    public function districts($division)
    {
        $districts = [

            "Dhaka" => [
                "Dhaka", "Gazipur", "Kishoreganj", "Manikganj",
                "Munshiganj", "Narayanganj", "Narsingdi",
                "Tangail", "Faridpur", "Rajbari", "Gopalganj", "Madaripur", "Shariatpur"
            ],

            "Chattogram" => [
                "Chattogram", "Cox's Bazar", "Cumilla", "Feni",
                "Brahmanbaria", "Noakhali", "Rangamati",
                "Khagrachari", "Bandarban", "Lakshmipur", "Chandpur"
            ],

            "Rajshahi" => [
                "Rajshahi", "Bogura", "Naogaon", "Natore",
                "Pabna", "Sirajganj", "Joypurhat", "Chapainawabganj"
            ],

            "Khulna" => [
                "Khulna", "Jessore", "Satkhira", "Bagerhat",
                "Chuadanga", "Jhenaidah", "Kushtia", "Magura", "Meherpur", "Narail"
            ],

            "Barishal" => [
                "Barishal", "Bhola", "Patuakhali", "Pirojpur",
                "Barguna", "Jhalokathi"
            ],

            "Sylhet" => [
                "Sylhet", "Moulvibazar", "Habiganj", "Sunamganj"
            ],

            "Rangpur" => [
                "Rangpur", "Dinajpur", "Kurigram",
                "Lalmonirhat", "Nilphamari", "Panchagarh", "Thakurgaon", "Gaibandha"
            ],

            "Mymensingh" => [
                "Mymensingh", "Jamalpur", "Netrokona", "Sherpur"
            ],
        ];

        return response()->json($districts[$division] ?? []);
    }

    /* ========================
        UPAZILA (FULL COVER)
    ======================== */
    public function upazilas($district)
    {
        $upazilas = [

            // Dhaka Division
            "Dhaka" => ["Dhamrai", "Dohar", "Keraniganj", "Nawabganj", "Savar"],
            "Gazipur" => ["Gazipur Sadar", "Kaliakair", "Kapasia", "Sreepur"],
            "Narayanganj" => ["Araihazar", "Sonargaon", "Rupganj", "Bandar"],
            "Narsingdi" => ["Belabo", "Monohardi", "Shibpur", "Raipura"],
            "Tangail" => ["Basail", "Bhuapur", "Delduar", "Dhanbari", "Ghatail", "Gopalpur", "Kalihati", "Madhupur", "Mirzapur", "Sakhipur"],
            "Kishoreganj" => ["Itna", "Katiadi", "Bhairab", "Mithamain", "Nikli", "Pakundia", "Tarail"],
            "Faridpur" => ["Alfadanga", "Bhanga", "Boalmari", "Charbhadrasan", "Nagarkanda", "Sadarpur"],

            // Chattogram
            "Chattogram" => ["Anwara", "Boalkhali", "Hathazari", "Patiya", "Raozan", "Sandwip"],
            "Cox's Bazar" => ["Chakaria", "Kutubdia", "Maheshkhali", "Ramu", "Teknaf", "Ukhia"],
            "Cumilla" => ["Barura", "Brahmanpara", "Burichong", "Chandina", "Chauddagram", "Daudkandi"],
            "Feni" => ["Chhagalnaiya", "Daganbhuiyan", "Fulgazi", "Parshuram", "Sonagazi"],

            // Rajshahi
            "Rajshahi" => ["Bagha", "Bagmara", "Charghat", "Godagari", "Mohanpur"],
            "Bogura" => ["Adamdighi", "Dhunat", "Gabtali", "Kahaloo", "Sariakandi", "Shajahanpur"],
            "Naogaon" => ["Atrai", "Badalgachhi", "Dhamoirhat", "Manda", "Raninagar"],
            "Natore" => ["Bagatipara", "Baraigram", "Gurudaspur", "Lalpur"],

            // Khulna
            "Khulna" => ["Dumuria", "Dighalia", "Koyra", "Paikgachha", "Phultala"],
            "Jessore" => ["Abhaynagar", "Bagherpara", "Chaugachha", "Jhikargachha"],
            "Satkhira" => ["Assasuni", "Debhata", "Kalaroa", "Kaliganj", "Shyamnagar"],

            // Barishal
            "Barishal" => ["Agailjhara", "Babuganj", "Bakerganj", "Banaripara", "Gaurnadi"],
            "Bhola" => ["Bhola Sadar", "Burhanuddin", "Char Fasson", "Lalmohan"],
            "Patuakhali" => ["Bauphal", "Galachipa", "Dashmina", "Kalapara"],

            // Sylhet
            "Sylhet" => ["Balaganj", "Beanibazar", "Bishwanath", "Companiganj", "Fenchuganj"],
            "Moulvibazar" => ["Barlekha", "Kamalganj", "Kulaura", "Rajnagar"],
            "Habiganj" => ["Ajmiriganj", "Bahubal", "Lakhai", "Madhabpur"],

            // Rangpur
            "Rangpur" => ["Badarganj", "Gangachara", "Kaunia", "Mithapukur"],
            "Dinajpur" => ["Birampur", "Birganj", "Chirirbandar", "Parbatipur"],
            "Kurigram" => ["Bhurungamari", "Char Rajibpur", "Nageshwari", "Ulipur"],

            // Mymensingh
            "Mymensingh" => ["Bhaluka", "Fulbaria", "Gaffargaon", "Trishal", "Gauripur"],
            "Jamalpur" => ["Bakshiganj", "Dewanganj", "Islampur", "Madarganj"],
            "Netrokona" => ["Atpara", "Barhatta", "Durgapur", "Kalmakanda"],
        ];

        return response()->json($upazilas[$district] ?? []);
    }

    /* ========================
        UNIONS (SAMPLE COMPLETE)
    ======================== */
public function unions($upazila)
{
    $unions = [

        /* ================= DHAMRAI ================= */
        "Dhamrai" => [
            "Amta",
            "Baisakanda",
            "Baria",
            "Chauhat",
            "Dhamrai",
            "Gangutia",
            "Kulla",
            "Nannar",
            "Rowail",
            "Sanora",
            "Sombhag",
            "Suapur",
            "Sutipara"
        ],

        /* ================= SAVAR ================= */
        "Savar" => [
            "Aminbazar",
            "Ashulia",
            "Banagram",
            "Bhakurta",
            "Birulia",
            "Dhamsona",
            "Shimulia",
            "Tetuljhora",
            "Yearpur"
        ],

        /* ================= GAZIPUR SADAR ================= */
        "Gazipur Sadar" => [
            "Bason",
            "Baria",
            "Bhawal Mirzapur",
            "Kashimpur",
            "Konabari",
            "Mirzapur",
            "Pubail"
        ],

        /* ================= KALIAKAIR ================= */
        "Kaliakair" => [
            "Baria",
            "Boali",
            "Mouchak",
            "Sofipur",
            "Sreepur Union",
            "Tengra"
        ],

        /* ================= HATHAZARI ================= */
        "Hathazari" => [
            "Fatehpur",
            "Mekhal",
            "Mirzapur",
            "Nangalmora",
            "Burishchar",
            "Garduara",
            "Hathazari",
            "Dharmapur",
            "Chikandandi"
        ],

        /* ================= PATIYA ================= */
        "Patiya" => [
            "Asia",
            "Bara Uthan",
            "Charkhijirpur",
            "Dhalghat",
            "Haidgaon",
            "Janglukhain",
            "Kachuai",
            "Kasiais",
            "Kelishahar",
            "Patiya Sadar"
        ],

        /* ================= RAOZAN ================= */
        "Raozan" => [
            "Bagoan",
            "Binajuri",
            "Chikdair",
            "Gahira",
            "Kadalpur",
            "Noapara",
            "Pahartali",
            "Raozan Sadar"
        ]


    ];

    return response()->json($unions[$upazila] ?? []);
}
}