<?php

namespace Faker\Provider\en_SL;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{suffix}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{suffix}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}} {{suffix}}',
    ];

    /**
     * Language Sinhala
     * Sri Lankan Male Names
     *
     * @see https://en.wikipedia.org/wiki/Category:Sinhalese_masculine_given_names
     */
    protected static $firstNameMale = [
        'Abhaya', 'Adeesha', 'Ajit', 'Akila', 'Aloka', 'Amarasiri', 'Anura', 'Asanga', 'Buddhika', 'Chamara', 'Chandrasena',
        'Chandrasiri', 'Chathuranga', 'Dharmadasa', 'Dileesh', 'Dilshan', 'Dilum', 'Dinuk', 'Dishan', 'Edirisinghe', 'Elanga',
        'Gamini', 'Gehan', 'Gemunu', 'Hasaranga', 'Heen', 'Hemantha', 'Himesh', 'Imesh', 'Indunil', 'Iresh', 'Ishara',
        'Jagath', 'Janak', 'Janaka', 'Janith', 'Jayasekara', 'Jayaweera', 'Kalhara', 'Kanishka', 'Karunaratne', 'Kasun',
        'Kavinda', 'Kusal', 'Lahiru', 'Lakmal', 'Lakshan', 'Lalith', 'Lasantha', 'Maithripala', 'Mangala', 'Manjula', '
        Mevan', 'Mohan', 'Nalaka', 'Nandasena', 'Nandasiri', 'Navod', 'Nimal', 'Niroshan', 'Nishantha', 'Nuwan', 'Palitha',
        'Prasanna', 'Priyantha', 'Ranil', 'Ranjith', 'Rashan', 'Raveen', 'Ravindu', 'Rohan', 'Romesh', 'Ruvin', 'Ruwan',
        'Sachith', 'Sajin', 'Sajith', 'Saliya', 'Samantha', 'Sanath', 'Sanjeeva', 'Sanjeewa', 'Shanaka', 'Shantha',
        'Shehan', 'Sujith', 'Supun', 'Suranjith', 'Tharindu', 'Thilan', 'Thiran', 'Thushara', 'Tissa', 'Udayanga',
        'Udesh', 'Upatissa', 'Upul', 'Vidura', 'Vijitha', 'Vimukthi',

    ];

    /**
     * @see https://en.wikipedia.org/wiki/Category:Sinhalese_feminine_given_names
     */
    protected static $firstNameFemale = [
        'Abhisheka', 'Amanda', 'Amaya', 'Anuki', 'Anuradhi', 'Ashani', 'Ayesha', 'Chamari', 'Chathuri',
        'Dasuni', 'Devni', 'Dilani', 'Dilhani', 'Dineshi', 'Dhanushi', 'Dulanjani', 'Eshani',
        'Gayani', 'Gihani', 'Hansani', 'Hansini', 'Harshani', 'Heshani', 'Hiruni', 'Inoka',
        'Ishara', 'Janaki', 'Janani', 'Jayani', 'Kanchana', 'Kumari', 'Lakmini', 'Lakshika',
        'Malkanthi', 'Malithi', 'Manuri', 'Menaka', 'Nadeeshani', 'Nalini', 'Narmada',
        'Niranjana', 'Nimeshi', 'NIshani', 'Nishanthi', 'Nuwani', 'Pabodhi', 'Pavani',
        'Pramodi', 'Prasadi', 'Priyadarshani', 'Pravini', 'Ruwani', 'Rukshani',
        'Sachini', 'Sadani', 'Samadhi', 'Sanjeewani', 'Sarangi', 'Sewandi',
        'Shashikala', 'Sithumi', 'Subani', 'Sunethra', 'Surangi', 'Tharuki',
        'Tharushi', 'Thilani', 'Thilinka', 'Udeni', 'Umeshi', 'Upuli', 'Vasanthi',
        'Yashodara',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/Category:Surnames_of_Sinhalese_origin
     */
    protected static $lastName = [
        'Abayakoon', 'Abeygunawardena', 'Abeynaike', 'Abeyratne', 'Abeysekera', 'Abeysinghe', 'Abeywardena',
        'Abeywickrama', 'Adhikari', 'Adikaram', 'Ahangama', 'Aloka', 'Amarasiri', 'Amerasekera', 'Amerasinghe',
        'Anthonisz', 'Aponsu', 'Appuhamy', 'Arachchi', 'Attanayake', 'Attygalle', 'Atukorale', 'Balasuriya', 'Bandara',
        'Bandaranaike', 'Basnayake', 'Buddika', 'Chamara', 'Chandima', 'Chandrasena', 'Chandrasiri', 'Chathuranga',
        'Cooray', 'Coorey', 'Corea', 'Dahanayake', 'Daminda', 'Danushka', 'Dassanayake', 'De Abrew', 'De Alwis',
        'De Saram', 'Denipitiya', 'Deraniyagala', 'Devapriya', 'Dhammika', 'Dharmadasa', 'Dharmasena', 'Dilshan',
        'Disasekara', 'Dissanaike', 'Dissanayake', 'Dodangoda', 'Edirisinghe', 'Ekanayake', 'Fernando', 'Fonseka',
        'Gamage', 'Gunaratne', 'Gunasekera', 'Gunathilaka', 'Gunawardena', 'Hasaranga', 'Hathurusingha', 'Herath',
        'Indika', 'Indunil', 'Jayakody', 'Jayakumar', 'Jayaratne', 'Jayasekara', 'Jayasinghe', 'Jayasuriya',
        'Jayatilleka', 'Jayatissa', 'Jayaweera', 'Jayawickrama', 'Jayewardene', 'Kalhara', 'Kanchana', 'Karunadasa',
        'Karunaratne', 'Karunatilaka', 'Kasun', 'Kavinda', 'Kodikara', 'Kodithuwakku', 'Kulasekara', 'Kumarage',
        'Labrooy', 'Lakmal', 'Lakshitha', 'Liyanage', 'Madugalle', 'Madusanka', 'Madushan', 'Madushanka', 'Manjula',
        'Mendis', 'Munasinghe', 'Nanayakkara', 'Nandasena', 'Nandasiri', 'Niroshana', 'Opatha', 'Palihakkara', 'Pathirana',
        'Peiris', 'Perera', 'Prasanna', 'Premadasa', 'Premaratne', 'Priyadarshana', 'Rajapaksa', 'Rajasekara', 'Ramanayake',
        'Ranasinghe', 'Ranatunga', 'Ranawaka', 'Ranaweera', 'Ratnayake', 'Ratwatte', 'Rohana', 'Samarakoon', 'Samarasekera',
        'Samarasinghe', 'Samaraweera', 'Sandaruwan', 'Sanjeewa', 'Schokman', 'Senanayake', 'Senarath', 'Senasinghe',
        'Seneviratne', 'Shantha', 'Shehan', 'Sigera', 'Sirisena', 'Siriwardena', 'Subasinghe', 'Sudarshana', 'Sugathapala',
        'Tharanga', 'Thilakaratne', 'Thushara', 'Tissera', 'Udawatte', 'Udayanga', 'Vidura', 'Vimukthi', 'Warakagoda',
        'Weerakoon', 'Weeraratna', 'Weeraratne', 'Weerasekara', 'Weerasinghe', 'Weerasooriya', 'Weerawansa', 'Wickremasinghe',
        'Wijeratne', 'Wijesinghe', 'Wijesinha', 'Wijesuriya', 'Wijethunga', 'Wijetunga', 'Wijewardene', 'Wikramanayake',
        'Withanachchi', 'Yapa',
    ];

    protected static $suffix = ['Sr.', 'MD', 'DDS', 'PhD', 'DVM'];

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }

    /**
     * @example '901234567V'
     */
    public static function nicNumberOld()
    {
        return sprintf(
            '%02d%02d%05d%s',
            self::numberBetween(0, 99),
            self::numberBetween(0, 99),
            self::numberBetween(1, 99999),
            self::randomElement(['V', 'X']),
        );
    }

    /**
     * @example '900123456789'
     */
    public static function nicNumber()
    {
        return sprintf(
            '%s%04d%05d%02d',
            self::randomElement(['9', '0']),
            self::numberBetween(1900, 2024),
            self::numberBetween(1, 99999),
            self::numberBetween(0, 99),
        );
    }
}
