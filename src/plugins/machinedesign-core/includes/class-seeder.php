<?php
defined( 'ABSPATH' ) || exit;

class MD_Core_Seeder {

    public static function run_idempotent() {
        $pillars = array(
            'machine-design'          => 'طراحی ماشین‌آلات و خطوط تولید',
            'factory-troubleshooting' => 'عیب‌یابی کارخانه و آنالیز ارتعاشات',
            'rd-prototyping'          => 'تحقیق و توسعه (R&D) و نمونه‌سازی',
            'engineering-mentorship'  => 'منتورشیپ فردی مهندسی مکانیک',
            'corporate-training'      => 'آموزش سازمانی کارخانجات',
            'machinery-inspection'    => 'کارشناسی خرید و بازرسی ماشین‌آلات',
        );
        foreach ( $pillars as $slug => $name ) {
            if ( ! term_exists( $slug, 'project_category' ) ) {
                wp_insert_term( $name, 'project_category', array( 'slug' => $slug ) );
            }
        }

        $industries = array(
            'food-beverage'          => 'صنایع غذایی و لبنی',
            'packaging'              => 'بسته‌بندی و پیلوپک',
            'pharma-hygienic'        => 'دارویی و کلین‌روم ۳۱۶',
            'polymer-plastics'       => 'پلیمر، اکسترودر و قالب‌سازی',
            'solar-automotive-heavy' => 'پنل خورشیدی و خطوط مونتاژ',
        );
        foreach ( $industries as $slug => $name ) {
            if ( ! term_exists( $slug, 'industry' ) ) {
                wp_insert_term( $name, 'industry', array( 'slug' => $slug ) );
            }
        }

        $standards = array(
            'solidworks-cad'          => 'SolidWorks CAD',
            'ansys-fea'               => 'Ansys FEA',
            'gdt-asme-y145'           => 'ASME Y14.5 GD&T',
            'iso-20816-vibration'     => 'ISO 20816 Vibration',
            'iso-12100-safety'        => 'ISO 12100 Safety',
            'dfma-dfmea'              => 'DFMA / DFMEA',
            'reverse-engineering-3d'  => '3D Optical Metrology',
            'pneumatics-automation'   => 'Pneumatics & Servo',
        );
        foreach ( $standards as $slug => $name ) {
            if ( ! term_exists( $slug, 'engineering_standard' ) ) {
                wp_insert_term( $name, 'engineering_standard', array( 'slug' => $slug ) );
            }
        }

        update_option( 'md_core_seeded_v3', '1', false );
    }
}
