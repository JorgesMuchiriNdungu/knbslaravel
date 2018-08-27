-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5289
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table knbs_bi.administrative_unit
CREATE TABLE IF NOT EXISTS `administrative_unit` (
  `administrative_unit_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `subcounty_id` int(11) NOT NULL,
  `divisions` int(11) NOT NULL,
  `locations` int(11) NOT NULL,
  `sub_locations` int(11) NOT NULL,
  PRIMARY KEY (`administrative_unit_id`),
  KEY `administrative_unit_county_id_cf200b7b_fk_health_co` (`county_id`),
  CONSTRAINT `administrative_unit_county_id_cf200b7b_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=285 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.agriculture_area_under_sugarcane_harvested_production_avg_yield
CREATE TABLE IF NOT EXISTS `agriculture_area_under_sugarcane_harvested_production_avg_yield` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `area_under_cane_ha` int(11) NOT NULL,
  `area_harvested_ha` int(11) NOT NULL,
  `production_tonnes` int(11) NOT NULL,
  `average_yield_tonnes_per_ha` decimal(10,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.agriculture_categories_of_agricultural_land
CREATE TABLE IF NOT EXISTS `agriculture_categories_of_agricultural_land` (
  `land_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `high_potential` int(11) NOT NULL,
  `medium_potential` int(11) NOT NULL,
  `low_potential` int(11) NOT NULL,
  `total_land` int(11) NOT NULL,
  `all_other_land` int(11) NOT NULL,
  `total_land_area` int(11) NOT NULL,
  PRIMARY KEY (`land_id`),
  KEY `agriculture_categori_county_id_0115365a_fk_health_co` (`county_id`),
  CONSTRAINT `agriculture_categori_county_id_0115365a_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.agriculture_chemical_med_feed_input
CREATE TABLE IF NOT EXISTS `agriculture_chemical_med_feed_input` (
  `chemical_med_feed_inputs_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` text NOT NULL,
  `cattle_feed` bigint(11) NOT NULL,
  `dips_spray_fluids` bigint(11) NOT NULL,
  `fungicides` bigint(11) NOT NULL,
  `herbicides` bigint(11) NOT NULL,
  `insecticides` bigint(11) NOT NULL,
  `other_feeds` bigint(11) NOT NULL,
  `other_livestock_drugs` bigint(11) NOT NULL,
  `pig_feed` bigint(11) NOT NULL,
  `plant_hormones` bigint(11) NOT NULL,
  `poultry_feed` bigint(11) NOT NULL,
  `vaccines` bigint(11) NOT NULL,
  PRIMARY KEY (`chemical_med_feed_inputs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.agriculture_cooperatives
CREATE TABLE IF NOT EXISTS `agriculture_cooperatives` (
  `cooperatives_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` text NOT NULL,
  `coffee` int(11) NOT NULL,
  `cotton` int(11) NOT NULL,
  `pyrethrum` int(11) NOT NULL,
  `sugar` int(11) NOT NULL,
  `dairy` int(11) NOT NULL,
  `multi_purpose` int(11) NOT NULL,
  `farm_purchase` int(11) NOT NULL,
  `fisheries` int(11) NOT NULL,
  `other_agricultural` int(11) NOT NULL,
  `saccos` int(11) NOT NULL,
  `consumer` int(11) NOT NULL,
  `housing` int(11) NOT NULL,
  `craftsmen` int(11) NOT NULL,
  `transport` int(11) NOT NULL,
  `other_non_agricultur` int(11) NOT NULL,
  `unions` int(11) NOT NULL,
  PRIMARY KEY (`cooperatives_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.agriculture_gross_market_production
CREATE TABLE IF NOT EXISTS `agriculture_gross_market_production` (
  `gross_market_production_at_constant_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` text NOT NULL,
  `cattle_and_calves_for_slaughter` bigint(100) NOT NULL,
  `sugarcane` bigint(100) NOT NULL,
  `vegetables` bigint(100) NOT NULL,
  `cutflowers` bigint(100) NOT NULL,
  `tea` bigint(100) NOT NULL,
  `fruits` bigint(100) NOT NULL,
  `poultry_and_eggs` bigint(100) NOT NULL,
  `wheat` bigint(100) NOT NULL,
  `sheep_goats_and_lambs_for_slaughter` bigint(100) NOT NULL,
  `maize` bigint(100) NOT NULL,
  `coffee` bigint(100) NOT NULL,
  `barley` bigint(100) NOT NULL,
  `dairy_products` bigint(100) NOT NULL,
  `cotton` bigint(100) NOT NULL,
  `hides_and_skins` bigint(100) NOT NULL,
  `other_cereals` bigint(100) NOT NULL,
  `other_temporary_crops` bigint(100) NOT NULL,
  `pigs_for_slaughter` bigint(100) NOT NULL,
  `wool` bigint(100) NOT NULL,
  `potatoes` bigint(100) NOT NULL,
  `pulses` bigint(100) NOT NULL,
  `pyrethrum` bigint(100) NOT NULL,
  `rice_paddy` bigint(100) NOT NULL,
  `tobacco` bigint(100) NOT NULL,
  `total_crops` bigint(100) NOT NULL,
  `grand_total` bigint(100) NOT NULL,
  PRIMARY KEY (`gross_market_production_at_constant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.agriculture_irrigation_schemes
CREATE TABLE IF NOT EXISTS `agriculture_irrigation_schemes` (
  `irrigation_schemes_id` int(11) NOT NULL AUTO_INCREMENT,
  `ahero_gross_value_of_crop_millions` bigint(11) NOT NULL,
  `ahero_hectares_cropped` bigint(11) NOT NULL,
  `ahero_number_of_plots_holders` bigint(11) NOT NULL,
  `ahero_paddy_yields_tonnes` bigint(11) NOT NULL,
  `ahero_payments_to_plot_holders_millions` bigint(11) NOT NULL,
  `all_schemes_gross_value_of_crop_millions` bigint(11) NOT NULL,
  `all_schemes_hectares_cropped` bigint(11) NOT NULL,
  `all_schemes_number_of_plots_holders` bigint(11) NOT NULL,
  `all_schemes_paddy_yields_tonnes` bigint(11) NOT NULL,
  `all_schemes_payments_to_plot_holders_millions` bigint(11) NOT NULL,
  `bunyala_gross_value_of_crop_millions` bigint(11) NOT NULL,
  `bunyala_hectares_cropped` bigint(11) NOT NULL,
  `bunyala_number_of_plots_holders` bigint(11) NOT NULL,
  `bunyala_paddy_yields_tonnes` bigint(11) NOT NULL,
  `bunyala_payments_to_plot_holders_millions` bigint(11) NOT NULL,
  `mwea_gross_value_of_crop_millions` bigint(11) NOT NULL,
  `mwea_hectares_cropped` bigint(11) NOT NULL,
  `mwea_number_of_plots_holders` bigint(11) NOT NULL,
  `mwea_paddy_yields_tonnes` bigint(11) NOT NULL,
  `mwea_payments_to_plot_holders_million` bigint(11) NOT NULL,
  `perkerra_gross_value_of_crop_millions` bigint(11) NOT NULL,
  `perkerra_hectares_cropped` bigint(11) NOT NULL,
  `perkerra_number_of_plots_holders` bigint(11) NOT NULL,
  `perkerra_payments_to_plot_holders_millions` bigint(11) NOT NULL,
  `perkerra_seed_maize_tonnes` bigint(11) NOT NULL,
  `west_kano_gross_value_of_crop_millions` bigint(11) NOT NULL,
  `west_kano_hectares_cropped` bigint(11) NOT NULL,
  `west_kano_number_of_plots_holders` bigint(11) NOT NULL,
  `west_kano_paddy_yields_tonnes` bigint(11) NOT NULL,
  `west_kano_payments_to_plot_holders_millions` bigint(11) NOT NULL,
  `year` text NOT NULL,
  PRIMARY KEY (`irrigation_schemes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.agriculture_land_potential
CREATE TABLE IF NOT EXISTS `agriculture_land_potential` (
  `land_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `subcounty_id` int(11) NOT NULL,
  `potential_id` int(11) NOT NULL,
  `value` double NOT NULL,
  PRIMARY KEY (`land_id`),
  KEY `agriculture_land_pot_county_id_f6dc0e8b_fk_health_co` (`county_id`),
  KEY `agriculture_land_pot_potential_id_ad9d32d9_fk_agricultu` (`potential_id`),
  CONSTRAINT `agriculture_land_pot_county_id_f6dc0e8b_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`),
  CONSTRAINT `agriculture_land_pot_potential_id_ad9d32d9_fk_agricultu` FOREIGN KEY (`potential_id`) REFERENCES `agriculture_land_potential_ids` (`potential_id`)
) ENGINE=InnoDB AUTO_INCREMENT=367 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.agriculture_land_potential_ids
CREATE TABLE IF NOT EXISTS `agriculture_land_potential_ids` (
  `potential_id` int(11) NOT NULL AUTO_INCREMENT,
  `landPotential` varchar(100) NOT NULL,
  PRIMARY KEY (`potential_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.agriculture_pricetoproducersformeatmilk
CREATE TABLE IF NOT EXISTS `agriculture_pricetoproducersformeatmilk` (
  `price_to_producers_for_meat_milk_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` text NOT NULL,
  `beef_third_grade_per_kg` int(11) NOT NULL,
  `pig_meat_per_kg` int(11) NOT NULL,
  `whole_milk_per_litre` int(11) NOT NULL,
  PRIMARY KEY (`price_to_producers_for_meat_milk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.agriculture_production_area_average_yield_coffee_type_of_grower
CREATE TABLE IF NOT EXISTS `agriculture_production_area_average_yield_coffee_type_of_grower` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `cooperatives` decimal(10,2) NOT NULL,
  `estates` decimal(10,2) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.agriculture_production_area_average_yield_tea_type_grower
CREATE TABLE IF NOT EXISTS `agriculture_production_area_average_yield_tea_type_grower` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `smallholders` decimal(10,2) NOT NULL,
  `estates` decimal(10,2) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.agriculture_production_of_livestock_and_dairy_products
CREATE TABLE IF NOT EXISTS `agriculture_production_of_livestock_and_dairy_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `by_product` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `value` decimal(30,7) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.agriculture_totalsharecapital
CREATE TABLE IF NOT EXISTS `agriculture_totalsharecapital` (
  `total_share_capital_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` text NOT NULL,
  `coffee` bigint(11) NOT NULL,
  `cotton` bigint(11) NOT NULL,
  `pyrethrum` bigint(11) NOT NULL,
  `sugar` bigint(11) NOT NULL,
  `dairy` bigint(11) NOT NULL,
  `multi_purpose` bigint(11) NOT NULL,
  `farm_purchase` bigint(11) NOT NULL,
  `fisheries` bigint(11) NOT NULL,
  `other_agricultural` bigint(11) NOT NULL,
  `total_agriculture` bigint(11) NOT NULL,
  `saccos` bigint(11) NOT NULL,
  `consumer` bigint(11) NOT NULL,
  `housing` bigint(11) NOT NULL,
  `craftsmen` bigint(11) NOT NULL,
  `transport` bigint(11) NOT NULL,
  `other_non_agricultural` bigint(11) NOT NULL,
  `total_non_agricultural` bigint(11) NOT NULL,
  `unions` bigint(11) NOT NULL,
  PRIMARY KEY (`total_share_capital_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.agriculture_valueofagriculturalinputs
CREATE TABLE IF NOT EXISTS `agriculture_valueofagriculturalinputs` (
  `value_of_agricultural_inputs_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` text NOT NULL,
  `accounting_secretarial_and_auditing_services` bigint(11) NOT NULL,
  `aerial_spraying` bigint(11) NOT NULL,
  `artificial_insemination` bigint(11) NOT NULL,
  `bags` bigint(100) NOT NULL,
  `farm_planning_and_survey_services` bigint(100) NOT NULL,
  `fertilizers` bigint(100) NOT NULL,
  `fuel` bigint(100) NOT NULL,
  `government_seed_inspection_services` bigint(100) NOT NULL,
  `government_veterinary_inoculation_services` bigint(100) NOT NULL,
  `insurance` bigint(100) NOT NULL,
  `livestock_drugs_and_medicines` bigint(100) NOT NULL,
  `manufactured_feeds` bigint(100) NOT NULL,
  `marketing_research_and_publicity` bigint(100) NOT NULL,
  `office_expenses` bigint(100) NOT NULL,
  `other` bigint(100) NOT NULL,
  `other_material_inputs` bigint(100) NOT NULL,
  `other_agricultural_chemicals` bigint(100) NOT NULL,
  `power` bigint(100) NOT NULL,
  `private_veterinary_services` bigint(100) NOT NULL,
  `seeds` bigint(100) NOT NULL,
  `small_implements` bigint(100) NOT NULL,
  `spares_and_maintenance_of_machinery` bigint(100) NOT NULL,
  `tractor_services` bigint(100) NOT NULL,
  `transportation` bigint(100) NOT NULL,
  PRIMARY KEY (`value_of_agricultural_inputs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.auth_group
CREATE TABLE IF NOT EXISTS `auth_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.auth_group_permissions
CREATE TABLE IF NOT EXISTS `auth_group_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_group_permissions_group_id_permission_id_0cd325b0_uniq` (`group_id`,`permission_id`),
  KEY `auth_group_permissio_permission_id_84c5c92e_fk_auth_perm` (`permission_id`),
  CONSTRAINT `auth_group_permissio_permission_id_84c5c92e_fk_auth_perm` FOREIGN KEY (`permission_id`) REFERENCES `auth_permission` (`id`),
  CONSTRAINT `auth_group_permissions_group_id_b120cbf9_fk_auth_group_id` FOREIGN KEY (`group_id`) REFERENCES `auth_group` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.auth_permission
CREATE TABLE IF NOT EXISTS `auth_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `content_type_id` int(11) NOT NULL,
  `codename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_permission_content_type_id_codename_01ab375a_uniq` (`content_type_id`,`codename`),
  CONSTRAINT `auth_permission_content_type_id_2f476e4b_fk_django_co` FOREIGN KEY (`content_type_id`) REFERENCES `django_content_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1156 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.auth_user
CREATE TABLE IF NOT EXISTS `auth_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(128) NOT NULL,
  `last_login` datetime(6) DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `username` varchar(150) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(254) NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_joined` datetime(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.auth_user_groups
CREATE TABLE IF NOT EXISTS `auth_user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_user_groups_user_id_group_id_94350c0c_uniq` (`user_id`,`group_id`),
  KEY `auth_user_groups_group_id_97559544_fk_auth_group_id` (`group_id`),
  CONSTRAINT `auth_user_groups_group_id_97559544_fk_auth_group_id` FOREIGN KEY (`group_id`) REFERENCES `auth_group` (`id`),
  CONSTRAINT `auth_user_groups_user_id_6a12ed8b_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.auth_user_user_permissions
CREATE TABLE IF NOT EXISTS `auth_user_user_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_user_user_permissions_user_id_permission_id_14a6b632_uniq` (`user_id`,`permission_id`),
  KEY `auth_user_user_permi_permission_id_1fbb5f2c_fk_auth_perm` (`permission_id`),
  CONSTRAINT `auth_user_user_permi_permission_id_1fbb5f2c_fk_auth_perm` FOREIGN KEY (`permission_id`) REFERENCES `auth_permission` (`id`),
  CONSTRAINT `auth_user_user_permissions_user_id_a95ead1b_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.building_and_construction_quarterly_civil_engineering_cost_index
CREATE TABLE IF NOT EXISTS `building_and_construction_quarterly_civil_engineering_cost_index` (
  `cost_index_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `march` decimal(15,2) NOT NULL,
  `june` decimal(15,2) NOT NULL,
  `sept` decimal(15,2) NOT NULL,
  `december` decimal(15,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`cost_index_id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.building_and_construction_quarterly_non_residential_build_cost
CREATE TABLE IF NOT EXISTS `building_and_construction_quarterly_non_residential_build_cost` (
  `cost_index_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `march` decimal(15,2) NOT NULL,
  `june` decimal(15,2) NOT NULL,
  `sept` decimal(15,2) NOT NULL,
  `december` decimal(15,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`cost_index_id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.building_and_construction_quarterly_overal_construction_cost
CREATE TABLE IF NOT EXISTS `building_and_construction_quarterly_overal_construction_cost` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `march` decimal(15,2) NOT NULL,
  `june` decimal(15,2) NOT NULL,
  `sept` decimal(15,2) NOT NULL,
  `december` decimal(15,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.building_and_construction_quarterly_residential_bulding_cost
CREATE TABLE IF NOT EXISTS `building_and_construction_quarterly_residential_bulding_cost` (
  `building_construction_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `march` decimal(15,2) NOT NULL,
  `june` decimal(15,2) NOT NULL,
  `september` decimal(15,2) NOT NULL,
  `december` decimal(15,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`building_construction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.cpi_annual_avg_retail_prices_of_certain_consumer_goods_in_kenya
CREATE TABLE IF NOT EXISTS `cpi_annual_avg_retail_prices_of_certain_consumer_goods_in_kenya` (
  `avg_retail_price_id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `ksh_per_unit` decimal(20,10) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`avg_retail_price_id`)
) ENGINE=InnoDB AUTO_INCREMENT=321 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.cpi_consumer_price_index
CREATE TABLE IF NOT EXISTS `cpi_consumer_price_index` (
  `cpi_retail_price_id` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `group` varchar(100) NOT NULL,
  `food_and_non_alcoholic_beverages` decimal(20,10) NOT NULL,
  `alcoholic_beverages_tobacco_narcotics` decimal(20,10) NOT NULL,
  `clothing_and_footwear` decimal(20,10) NOT NULL,
  `housing_water_electricity_gas_and_other_fuels` decimal(20,10) NOT NULL,
  `furnishings_household_equipment_routine_household_maintenance` decimal(20,10) NOT NULL,
  `health` decimal(20,10) NOT NULL,
  `transport` decimal(20,10) NOT NULL,
  `communication` decimal(20,10) NOT NULL,
  `recreation_and_culture` decimal(20,10) NOT NULL,
  `education` decimal(20,10) NOT NULL,
  `restaurant_and_hotels` decimal(20,10) NOT NULL,
  `miscellaneous_goods_and_services` decimal(20,10) NOT NULL,
  `total` decimal(20,10) NOT NULL,
  PRIMARY KEY (`cpi_retail_price_id`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.cpi_elementary_aggregates_weights_in_the_cpi_baskets
CREATE TABLE IF NOT EXISTS `cpi_elementary_aggregates_weights_in_the_cpi_baskets` (
  `aggregate_weights_id` int(11) NOT NULL AUTO_INCREMENT,
  `coicop_code` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `nairobi_lower` decimal(20,10) NOT NULL,
  `nairobi_middle` decimal(20,10) NOT NULL,
  `nairobi_upper` decimal(20,10) NOT NULL,
  `rest_of_urban_areas` decimal(20,10) NOT NULL,
  `kenya` decimal(20,10) NOT NULL,
  PRIMARY KEY (`aggregate_weights_id`)
) ENGINE=InnoDB AUTO_INCREMENT=235 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.cpi_group_weights_for_kenya_cpi_febuary_base_2009
CREATE TABLE IF NOT EXISTS `cpi_group_weights_for_kenya_cpi_febuary_base_2009` (
  `group_weights_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  `household` varchar(100) NOT NULL,
  `group_weights` decimal(20,10) NOT NULL,
  PRIMARY KEY (`group_weights_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.cpi_group_weights_for_kenya_cpi_october_base_1997
CREATE TABLE IF NOT EXISTS `cpi_group_weights_for_kenya_cpi_october_base_1997` (
  `group_weight_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_group` varchar(100) NOT NULL,
  `household` varchar(100) NOT NULL,
  `group_weights` decimal(20,10) NOT NULL,
  PRIMARY KEY (`group_weight_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.django_admin_log
CREATE TABLE IF NOT EXISTS `django_admin_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action_time` datetime(6) NOT NULL,
  `object_id` longtext,
  `object_repr` varchar(200) NOT NULL,
  `action_flag` smallint(5) unsigned NOT NULL,
  `change_message` longtext NOT NULL,
  `content_type_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `django_admin_log_content_type_id_c4bce8eb_fk_django_co` (`content_type_id`),
  KEY `django_admin_log_user_id_c564eba6_fk_auth_user_id` (`user_id`),
  CONSTRAINT `django_admin_log_content_type_id_c4bce8eb_fk_django_co` FOREIGN KEY (`content_type_id`) REFERENCES `django_content_type` (`id`),
  CONSTRAINT `django_admin_log_user_id_c564eba6_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.django_content_type
CREATE TABLE IF NOT EXISTS `django_content_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_label` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `django_content_type_app_label_model_76bd3d3b_uniq` (`app_label`,`model`)
) ENGINE=InnoDB AUTO_INCREMENT=386 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.django_migrations
CREATE TABLE IF NOT EXISTS `django_migrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `applied` datetime(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=185 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.django_session
CREATE TABLE IF NOT EXISTS `django_session` (
  `session_key` varchar(40) NOT NULL,
  `session_data` longtext NOT NULL,
  `expire_date` datetime(6) NOT NULL,
  PRIMARY KEY (`session_key`),
  KEY `django_session_expire_date_a5c62663` (`expire_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_approved_degree_diploma_programs
CREATE TABLE IF NOT EXISTS `education_approved_degree_diploma_programs` (
  `approved_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `approved_degree_programmes` int(11) NOT NULL,
  `approved_private_university_degreeprogrammes` int(11) NOT NULL,
  `validated_diploma_programmes` int(11) NOT NULL,
  PRIMARY KEY (`approved_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_csa_adulteducationcentresbysubcounty
CREATE TABLE IF NOT EXISTS `education_csa_adulteducationcentresbysubcounty` (
  `adult_centre_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `sub_county_id` int(11) NOT NULL,
  `centres` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`adult_centre_id`),
  KEY `education_csa_adulte_county_id_97cc36e9_fk_health_co` (`county_id`),
  CONSTRAINT `education_csa_adulte_county_id_97cc36e9_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=455 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_csa_adulteducationenrolmentbysexandsubcounty
CREATE TABLE IF NOT EXISTS `education_csa_adulteducationenrolmentbysexandsubcounty` (
  `adult_enrolment_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `sub_county_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`adult_enrolment_id`),
  KEY `education_csa_adulte_county_id_41b60a57_fk_health_co` (`county_id`),
  CONSTRAINT `education_csa_adulte_county_id_41b60a57_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=893 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_csa_adulteducationproficiencytestresults
CREATE TABLE IF NOT EXISTS `education_csa_adulteducationproficiencytestresults` (
  `adult_proficiency_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `sub_county_id` int(11) NOT NULL,
  `no_sat` int(11) NOT NULL,
  `no_passed` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`adult_proficiency_id`),
  KEY `education_csa_adulte_county_id_919947db_fk_health_co` (`county_id`),
  CONSTRAINT `education_csa_adulte_county_id_919947db_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=656 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_csa_ecdecentresbycategoryandsubcounty
CREATE TABLE IF NOT EXISTS `education_csa_ecdecentresbycategoryandsubcounty` (
  `ecde_centre_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `sub_county_id` int(11) NOT NULL,
  `no_of_centres` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`ecde_centre_id`),
  KEY `education_csa_ecdece_county_id_29286a9c_fk_health_co` (`county_id`),
  CONSTRAINT `education_csa_ecdece_county_id_29286a9c_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=465 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_csa_primaryenrolmentandaccessindicators
CREATE TABLE IF NOT EXISTS `education_csa_primaryenrolmentandaccessindicators` (
  `primary_enrolment_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `enrolment` int(11) NOT NULL,
  `ger` double NOT NULL,
  `ner` double NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`primary_enrolment_id`),
  KEY `education_csa_primar_county_id_8c852ccd_fk_health_co` (`county_id`),
  CONSTRAINT `education_csa_primar_county_id_8c852ccd_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_csa_primaryschoolenrollmentbyclasssexandsubcounty
CREATE TABLE IF NOT EXISTS `education_csa_primaryschoolenrollmentbyclasssexandsubcounty` (
  `primary_enrollment_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `sub_county_id` int(11) NOT NULL,
  `class_1` int(11) NOT NULL,
  `class_2` int(11) NOT NULL,
  `class_3` int(11) NOT NULL,
  `class_4` int(11) NOT NULL,
  `class_5` int(11) NOT NULL,
  `class_6` int(11) NOT NULL,
  `class_7` int(11) NOT NULL,
  `class_8` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`primary_enrollment_id`),
  KEY `education_csa_primar_county_id_8a9562e6_fk_health_co` (`county_id`),
  CONSTRAINT `education_csa_primar_county_id_8a9562e6_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=553 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_csa_primaryschoolsbycategoryandsubcounty
CREATE TABLE IF NOT EXISTS `education_csa_primaryschoolsbycategoryandsubcounty` (
  `primary_schools_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `sub_county_id` int(11) NOT NULL,
  `no_of_schools` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`primary_schools_id`),
  KEY `education_csa_primar_county_id_8c0d112d_fk_health_co` (`county_id`),
  CONSTRAINT `education_csa_primar_county_id_8c0d112d_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=433 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_csa_secondaryenrolmentandaccessindicators
CREATE TABLE IF NOT EXISTS `education_csa_secondaryenrolmentandaccessindicators` (
  `secondary_enrolment_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `enrolment` int(11) NOT NULL,
  `ger` double NOT NULL,
  `ner` double NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`secondary_enrolment_id`),
  KEY `education_csa_second_county_id_c8986b64_fk_health_co` (`county_id`),
  CONSTRAINT `education_csa_second_county_id_c8986b64_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_csa_secondaryschoolenrollmentbyclasssexsubcounty
CREATE TABLE IF NOT EXISTS `education_csa_secondaryschoolenrollmentbyclasssexsubcounty` (
  `enrollment_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `sub_county_id` int(11) NOT NULL,
  `form_1` int(11) NOT NULL,
  `form_2` int(11) NOT NULL,
  `form_3` int(11) NOT NULL,
  `form_4` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`enrollment_id`),
  KEY `education_csa_second_county_id_e9932b8a_fk_health_co` (`county_id`),
  CONSTRAINT `education_csa_second_county_id_e9932b8a_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=509 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_csa_studentenrolmentinyouthpolytechnics
CREATE TABLE IF NOT EXISTS `education_csa_studentenrolmentinyouthpolytechnics` (
  `youth_poly_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `sub_county_id` int(11) NOT NULL,
  `institution_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`youth_poly_id`),
  KEY `education_csa_studen_county_id_60f4e930_fk_health_co` (`county_id`),
  CONSTRAINT `education_csa_studen_county_id_60f4e930_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=647 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_csa_teachertrainingcolleges
CREATE TABLE IF NOT EXISTS `education_csa_teachertrainingcolleges` (
  `teacher_colleges_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `pre_primary` int(11) NOT NULL,
  `primary_sc` int(11) NOT NULL,
  `secondary` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`teacher_colleges_id`),
  KEY `education_csa_teache_county_id_03d26d59_fk_health_co` (`county_id`),
  CONSTRAINT `education_csa_teache_county_id_03d26d59_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_csa_youthpolytechnicsbycategoryandsubcounty
CREATE TABLE IF NOT EXISTS `education_csa_youthpolytechnicsbycategoryandsubcounty` (
  `youth_poly_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `sub_county_id` int(11) NOT NULL,
  `public` int(11) NOT NULL,
  `private` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`youth_poly_id`),
  KEY `education_csa_youthp_county_id_6ee59245_fk_health_co` (`county_id`),
  CONSTRAINT `education_csa_youthp_county_id_6ee59245_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_distribution_abovefifteen_ability_readwrite
CREATE TABLE IF NOT EXISTS `education_distribution_abovefifteen_ability_readwrite` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `literate` decimal(10,1) NOT NULL,
  `illiterate` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `education_distributi_county_id_fa5bfc6e_fk_health_co` (`county_id`),
  CONSTRAINT `education_distributi_county_id_fa5bfc6e_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_distribution_abovethreeyears_highestlevel_reached
CREATE TABLE IF NOT EXISTS `education_distribution_abovethreeyears_highestlevel_reached` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `pre_primary` decimal(10,1) NOT NULL,
  `primary` decimal(10,1) NOT NULL,
  `post_primary` decimal(10,1) NOT NULL,
  `secondary` decimal(10,1) NOT NULL,
  `college` decimal(10,1) NOT NULL,
  `university` decimal(10,1) NOT NULL,
  `madrassa_duksi` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `education_distributi_county_id_aa8bf3a5_fk_health_co` (`county_id`),
  CONSTRAINT `education_distributi_county_id_aa8bf3a5_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_distribution_abovethreeyears_training
CREATE TABLE IF NOT EXISTS `education_distribution_abovethreeyears_training` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `ever_attended` decimal(10,1) NOT NULL,
  `never_attended` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `education_distributi_county_id_eaf28b20_fk_health_co` (`county_id`),
  CONSTRAINT `education_distributi_county_id_eaf28b20_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_distribution_highest_education_qualification
CREATE TABLE IF NOT EXISTS `education_distribution_highest_education_qualification` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `none` decimal(10,1) NOT NULL,
  `cpe_kcpe` decimal(10,1) NOT NULL,
  `kape` decimal(10,1) NOT NULL,
  `kjse` decimal(10,1) NOT NULL,
  `kce_kcse` decimal(10,1) NOT NULL,
  `kace_eaace` decimal(10,1) NOT NULL,
  `certificate` decimal(10,1) NOT NULL,
  `diploma` decimal(10,1) NOT NULL,
  `degree` decimal(10,1) NOT NULL,
  `post_literacy_cert` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `education_distributi_county_id_a67ac2e0_fk_health_co` (`county_id`),
  CONSTRAINT `education_distributi_county_id_a67ac2e0_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_distribution_sixthirteen_by_schooltype
CREATE TABLE IF NOT EXISTS `education_distribution_sixthirteen_by_schooltype` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `day` decimal(10,1) NOT NULL,
  `boarding` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `education_distributi_county_id_f6f8a584_fk_health_co` (`county_id`),
  CONSTRAINT `education_distributi_county_id_f6f8a584_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_distribution_three_twentyfour_schoolattendance
CREATE TABLE IF NOT EXISTS `education_distribution_three_twentyfour_schoolattendance` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `currently_attending` decimal(10,1) NOT NULL,
  `not_attending` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  `age_group` varchar(10) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `education_distributi_county_id_8b0fe41e_fk_health_co` (`county_id`),
  CONSTRAINT `education_distributi_county_id_8b0fe41e_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=189 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_edstat_ecde_enrollment_and_enrollment_rates_by_county
CREATE TABLE IF NOT EXISTS `education_edstat_ecde_enrollment_and_enrollment_rates_by_county` (
  `ecde_enrollment_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `ecde_enrollment` int(11) NOT NULL,
  `gross_enrollment_rate` decimal(10,2) NOT NULL,
  `net_enrollment_rate` decimal(10,2) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`ecde_enrollment_id`),
  KEY `education_edstat_ecd_county_id_58470d04_fk_health_co` (`county_id`),
  CONSTRAINT `education_edstat_ecd_county_id_58470d04_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=283 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_edstat_kcpe_examination_candidature
CREATE TABLE IF NOT EXISTS `education_edstat_kcpe_examination_candidature` (
  `candidature_id` int(11) NOT NULL AUTO_INCREMENT,
  `kcpe_candidature` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`candidature_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_edstat_kcpe_examination_results_by_subject
CREATE TABLE IF NOT EXISTS `education_edstat_kcpe_examination_results_by_subject` (
  `kcpe_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `kcpe_result` decimal(10,2) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`kcpe_result_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_edstat_kcse_examination_results
CREATE TABLE IF NOT EXISTS `education_edstat_kcse_examination_results` (
  `kcse_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `number_of_candidates` int(11) NOT NULL,
  `kcse_grade` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`kcse_result_id`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_edstat_primary_enrollment_enrollment_rates_county
CREATE TABLE IF NOT EXISTS `education_edstat_primary_enrollment_enrollment_rates_county` (
  `primary_enrollment_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `primary_enrollment` int(11) NOT NULL,
  `gross_enrollment_rate` decimal(10,2) NOT NULL,
  `net_enrollment_rate` decimal(10,2) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`primary_enrollment_id`),
  KEY `education_edstat_pri_county_id_080ba79e_fk_health_co` (`county_id`),
  CONSTRAINT `education_edstat_pri_county_id_080ba79e_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=283 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_edstat_secondary_enrollment_enrollment_rates_county
CREATE TABLE IF NOT EXISTS `education_edstat_secondary_enrollment_enrollment_rates_county` (
  `secondary_enrollment_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `secondary_enrollment` int(11) NOT NULL,
  `gross_enrollment_rate` decimal(10,2) NOT NULL,
  `net_enrollment_rate` decimal(10,2) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`secondary_enrollment_id`),
  KEY `education_edstat_sec_county_id_de55c032_fk_health_co` (`county_id`),
  CONSTRAINT `education_edstat_sec_county_id_de55c032_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=283 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_gross_attendance_ratio_by_level
CREATE TABLE IF NOT EXISTS `education_gross_attendance_ratio_by_level` (
  `ratio_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `pre_primary` decimal(10,1) NOT NULL,
  `primary` decimal(10,1) NOT NULL,
  `secondary` decimal(10,1) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`ratio_id`),
  KEY `education_gross_atte_county_id_d6df1488_fk_health_co` (`county_id`),
  CONSTRAINT `education_gross_atte_county_id_d6df1488_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_net_attendance_ratio_by_level
CREATE TABLE IF NOT EXISTS `education_net_attendance_ratio_by_level` (
  `ratio_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `pre_primary` decimal(10,1) NOT NULL,
  `primary` decimal(10,1) NOT NULL,
  `secondary` decimal(10,1) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`ratio_id`),
  KEY `education_net_attend_county_id_634e4097_fk_health_co` (`county_id`),
  CONSTRAINT `education_net_attend_county_id_634e4097_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_number_of_candidates_by_sex_in_kcse
CREATE TABLE IF NOT EXISTS `education_number_of_candidates_by_sex_in_kcse` (
  `candidate_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `proportion` decimal(10,1) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`candidate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_population_distribution_above_three_school_attendance
CREATE TABLE IF NOT EXISTS `education_population_distribution_above_three_school_attendance` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `currently_attending` decimal(10,1) NOT NULL,
  `not_attending` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `education_population_county_id_2fa4a079_fk_health_co` (`county_id`),
  CONSTRAINT `education_population_county_id_2fa4a079_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_primary_school_enrolments_by_sex
CREATE TABLE IF NOT EXISTS `education_primary_school_enrolments_by_sex` (
  `enrolment_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `boys` int(11) NOT NULL,
  `girls` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `percentage_girls` decimal(10,1) NOT NULL,
  `parity_index` decimal(10,1) NOT NULL,
  PRIMARY KEY (`enrolment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_public_primaryteachers_trainingcollege_enrolment
CREATE TABLE IF NOT EXISTS `education_public_primaryteachers_trainingcollege_enrolment` (
  `candidate_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `proportion` decimal(10,1) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`candidate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_public_primary_school_teachers_by_sex
CREATE TABLE IF NOT EXISTS `education_public_primary_school_teachers_by_sex` (
  `candidate_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `proportion` decimal(10,1) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`candidate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_public_secondary_school_teachers_by_sex
CREATE TABLE IF NOT EXISTS `education_public_secondary_school_teachers_by_sex` (
  `candidate_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `proportion` decimal(10,1) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`candidate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_secondary_school_enrolment_by_sex
CREATE TABLE IF NOT EXISTS `education_secondary_school_enrolment_by_sex` (
  `enrolment_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `boys` int(11) NOT NULL,
  `girls` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `percentage_girls` decimal(10,1) NOT NULL,
  `parity_index` decimal(10,1) NOT NULL,
  PRIMARY KEY (`enrolment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_studentenrollmentbysextechnicalinstitutions
CREATE TABLE IF NOT EXISTS `education_studentenrollmentbysextechnicalinstitutions` (
  `student_enrollment_id` int(11) NOT NULL AUTO_INCREMENT,
  `institution` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  PRIMARY KEY (`student_enrollment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.education_studentenrollmentpublicuniversities
CREATE TABLE IF NOT EXISTS `education_studentenrollmentpublicuniversities` (
  `student_enrollment_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `undergraduates` int(11) NOT NULL,
  `postgraduates` int(11) NOT NULL,
  `other` int(11) NOT NULL,
  PRIMARY KEY (`student_enrollment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.energy_averagemonthlypumppricesforfuelbycategory
CREATE TABLE IF NOT EXISTS `energy_averagemonthlypumppricesforfuelbycategory` (
  `count_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `month_id` int(11) NOT NULL,
  `super_petrol` decimal(65,2) NOT NULL,
  `diesel` decimal(65,2) NOT NULL,
  `kerosene` decimal(65,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`count_id`),
  KEY `energy_averagemonthl_county_id_7c8ef9e0_fk_health_co` (`county_id`),
  CONSTRAINT `energy_averagemonthl_county_id_7c8ef9e0_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2847 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.energy_average_retail_prices_of_selected_petroleum_products
CREATE TABLE IF NOT EXISTS `energy_average_retail_prices_of_selected_petroleum_products` (
  `retail_price_id` int(11) NOT NULL AUTO_INCREMENT,
  `petroleum_product` varchar(100) NOT NULL,
  `retail_price_ksh` decimal(10,2) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`retail_price_id`)
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.energy_electricity_demand_and_supply
CREATE TABLE IF NOT EXISTS `energy_electricity_demand_and_supply` (
  `electricity_id` int(11) NOT NULL AUTO_INCREMENT,
  `demand_supply` varchar(100) NOT NULL,
  `capacity_megawatts` decimal(20,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`electricity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.energy_generation_and_imports_of_electricity
CREATE TABLE IF NOT EXISTS `energy_generation_and_imports_of_electricity` (
  `electricity_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `electricity_source` varchar(100) NOT NULL,
  `capacity_megawatts` decimal(20,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`electricity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.energy_installed_and_effective_capacity_of_electricity
CREATE TABLE IF NOT EXISTS `energy_installed_and_effective_capacity_of_electricity` (
  `capacity_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `electricity_source` varchar(100) NOT NULL,
  `capacity_megawatts` decimal(20,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`capacity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category
CREATE TABLE IF NOT EXISTS `energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category` (
  `domestic_sale_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `quantity_tonnes` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`domestic_sale_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.energy_petroleum_supply_and_demand
CREATE TABLE IF NOT EXISTS `energy_petroleum_supply_and_demand` (
  `petroleum_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `petroleum_product` varchar(100) NOT NULL,
  `quantity_tonnes` decimal(20,4) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`petroleum_id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.energy_value_and_quantity_of_imports_exports
CREATE TABLE IF NOT EXISTS `energy_value_and_quantity_of_imports_exports` (
  `petroleum_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `petroleum_product` varchar(100) NOT NULL,
  `quantity_tonnes` int(11) NOT NULL,
  `value_millions` decimal(20,4) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`petroleum_id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.environment_and_natural_resources_average_export_prices_ash
CREATE TABLE IF NOT EXISTS `environment_and_natural_resources_average_export_prices_ash` (
  `average_id` int(11) NOT NULL AUTO_INCREMENT,
  `soda_ash` decimal(65,2) NOT NULL,
  `fluorspar` decimal(65,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`average_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.environment_and_natural_resources_development_expenditure_water
CREATE TABLE IF NOT EXISTS `environment_and_natural_resources_development_expenditure_water` (
  `development_id` int(11) NOT NULL AUTO_INCREMENT,
  `water_development` decimal(65,2) NOT NULL,
  `training_of_water_development_staff` decimal(65,2) NOT NULL,
  `rural_water_supplies` decimal(65,2) NOT NULL,
  `miscellaneous_and_special_water_programmes` decimal(65,2) NOT NULL,
  `national_water_conservation_and_pipeline_corporation` decimal(65,2) NOT NULL,
  `irrigation_development` decimal(65,2) NOT NULL,
  `national_irrigation_board` decimal(65,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`development_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.environment_and_natural_resources_expenditure_cleaning_refuse
CREATE TABLE IF NOT EXISTS `environment_and_natural_resources_expenditure_cleaning_refuse` (
  `development_id` int(11) NOT NULL AUTO_INCREMENT,
  `refuse_removal` decimal(65,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`development_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.environment_and_natural_resources_government_forest
CREATE TABLE IF NOT EXISTS `environment_and_natural_resources_government_forest` (
  `govt_id` int(11) NOT NULL AUTO_INCREMENT,
  `previous_plantation_area` decimal(65,2) NOT NULL,
  `area_planted` decimal(65,2) NOT NULL,
  `area_clear_felled` decimal(65,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`govt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.environment_and_natural_resources_num_high_risk_environ_impact
CREATE TABLE IF NOT EXISTS `environment_and_natural_resources_num_high_risk_environ_impact` (
  `risk_id` int(11) NOT NULL AUTO_INCREMENT,
  `transport_and_communication` decimal(65,2) NOT NULL,
  `energy` decimal(65,2) NOT NULL,
  `tourism` decimal(65,2) NOT NULL,
  `mining_and_quarrying` decimal(65,2) NOT NULL,
  `human_settlements_and_Infrastructure` decimal(65,2) NOT NULL,
  `agriculture_and_forestry` decimal(65,2) NOT NULL,
  `commerce_and_industry` decimal(65,2) NOT NULL,
  `water_resources` decimal(65,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`risk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.environment_and_natural_resources_population_wildlife
CREATE TABLE IF NOT EXISTS `environment_and_natural_resources_population_wildlife` (
  `population_id` int(11) NOT NULL AUTO_INCREMENT,
  `buffalo` decimal(65,2) NOT NULL,
  `burchell_zebra` decimal(65,2) NOT NULL,
  `eland` decimal(65,2) NOT NULL,
  `elephant` decimal(65,2) NOT NULL,
  `gerenuk` decimal(65,2) NOT NULL,
  `giraffe` decimal(65,2) NOT NULL,
  `grant_gazelle` decimal(65,2) NOT NULL,
  `grevy_zebra` decimal(65,2) NOT NULL,
  `hunters_hartebeest` decimal(65,2) NOT NULL,
  `impala` decimal(65,2) NOT NULL,
  `kongoni` decimal(65,2) NOT NULL,
  `kudu` decimal(65,2) NOT NULL,
  `oryx` decimal(65,2) NOT NULL,
  `ostrich` decimal(65,2) NOT NULL,
  `thomson_gazelle` decimal(65,2) NOT NULL,
  `topi` decimal(65,2) NOT NULL,
  `warthog` decimal(65,2) NOT NULL,
  `waterbuck` decimal(65,2) NOT NULL,
  `wildebeest` decimal(65,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`population_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.environment_and_natural_resources_quantity_of_total_mineral
CREATE TABLE IF NOT EXISTS `environment_and_natural_resources_quantity_of_total_mineral` (
  `quantity_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` decimal(65,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`quantity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.environment_and_natural_resources_quantity_value_fish_landed
CREATE TABLE IF NOT EXISTS `environment_and_natural_resources_quantity_value_fish_landed` (
  `quantity_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `value` decimal(65,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`quantity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.environment_and_natural_resources_record_sale_goverment_products
CREATE TABLE IF NOT EXISTS `environment_and_natural_resources_record_sale_goverment_products` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `soft_wood` decimal(65,2) NOT NULL,
  `fuelwood_charcoal` decimal(65,2) NOT NULL,
  `power_and_telegraph` decimal(65,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.environment_and_natural_resources_trends_envi_natural_resources
CREATE TABLE IF NOT EXISTS `environment_and_natural_resources_trends_envi_natural_resources` (
  `trend_id` int(11) NOT NULL AUTO_INCREMENT,
  `forestry_and_logging` decimal(65,2) NOT NULL,
  `fishing_and_aquaculture` decimal(65,2) NOT NULL,
  `mining_and_quarrying` decimal(65,2) NOT NULL,
  `water_supply` decimal(65,2) NOT NULL,
  `GDP_at_current_prices` decimal(65,2) NOT NULL,
  `resource_as_percent_of_GDP` decimal(65,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`trend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.environment_and_natural_resources_value_of_total_mineral
CREATE TABLE IF NOT EXISTS `environment_and_natural_resources_value_of_total_mineral` (
  `value_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` decimal(65,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`value_id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.environment_and_natural_resources_water_purification_points
CREATE TABLE IF NOT EXISTS `environment_and_natural_resources_water_purification_points` (
  `water_id` int(11) NOT NULL AUTO_INCREMENT,
  `water_purification_points` decimal(65,2) NOT NULL,
  `boreholes_total` decimal(65,2) NOT NULL,
  `public` decimal(65,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`water_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_cdf_allocation_by_constituency
CREATE TABLE IF NOT EXISTS `finance_cdf_allocation_by_constituency` (
  `cdf_allocation_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `subcounty_id` int(11) NOT NULL,
  `cdf_amount` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`cdf_allocation_id`),
  KEY `finance_cdf_allocati_county_id_16478d89_fk_health_co` (`county_id`),
  CONSTRAINT `finance_cdf_allocati_county_id_16478d89_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=527 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_classification_national_government_expenditure_function
CREATE TABLE IF NOT EXISTS `finance_classification_national_government_expenditure_function` (
  `classification_id` int(11) NOT NULL AUTO_INCREMENT,
  `government_function` varchar(100) NOT NULL,
  `recurrent_account_in_millions` decimal(65,10) NOT NULL,
  `development_account_in_millions` decimal(65,10) NOT NULL,
  `total_in_millions` decimal(65,10) NOT NULL,
  `year` varchar(100) NOT NULL,
  PRIMARY KEY (`classification_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_county_budget_allocation
CREATE TABLE IF NOT EXISTS `finance_county_budget_allocation` (
  `budget_allocation_ID` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `recurrent` varchar(255) NOT NULL,
  `development` varchar(255) NOT NULL,
  `total_allocation` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  PRIMARY KEY (`budget_allocation_ID`),
  KEY `finance_county_budge_county_id_f81395b0_fk_health_co` (`county_id`),
  CONSTRAINT `finance_county_budge_county_id_f81395b0_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_county_expenditure
CREATE TABLE IF NOT EXISTS `finance_county_expenditure` (
  `countyexpenditure_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `compensation_employees` decimal(15,2) NOT NULL,
  `goods_services` decimal(15,2) NOT NULL,
  `subsidies` decimal(15,2) NOT NULL,
  `grants_internationalorganisation` decimal(15,2) NOT NULL,
  `grants_governmentunits` decimal(15,2) NOT NULL,
  `othergrants` decimal(15,2) NOT NULL,
  `capitalgrants` decimal(15,2) NOT NULL,
  `socialbenefits` decimal(15,2) NOT NULL,
  `otherexpense` decimal(15,2) NOT NULL,
  `buildingstructures` decimal(15,2) NOT NULL,
  `plantmachinery_equipment` decimal(15,2) NOT NULL,
  `inventories` decimal(15,2) NOT NULL,
  `otherassets` decimal(15,2) NOT NULL,
  `acquisition_financialassets` decimal(15,2) NOT NULL,
  `interest_debt` decimal(15,2) NOT NULL,
  `total_expenditure` decimal(15,2) NOT NULL,
  `year` varchar(50) NOT NULL,
  PRIMARY KEY (`countyexpenditure_id`),
  KEY `finance_county_expen_county_id_0a349c2d_fk_health_co` (`county_id`),
  CONSTRAINT `finance_county_expen_county_id_0a349c2d_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_county_revenue
CREATE TABLE IF NOT EXISTS `finance_county_revenue` (
  `county_revenue_id` int(11) NOT NULL AUTO_INCREMENT,
  `revenue_estimates` int(11) NOT NULL,
  `conditional_grant` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  `equitable_share` int(11) NOT NULL,
  `total_revenue` int(11) NOT NULL,
  `year` varchar(20) NOT NULL,
  PRIMARY KEY (`county_revenue_id`),
  KEY `finance_county_reven_county_id_7c871ea0_fk_health_co` (`county_id`),
  CONSTRAINT `finance_county_reven_county_id_7c871ea0_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_economic_analysis_of_national_government_expenditure
CREATE TABLE IF NOT EXISTS `finance_economic_analysis_of_national_government_expenditure` (
  `expenditure_id` int(11) NOT NULL AUTO_INCREMENT,
  `expenditure` varchar(100) NOT NULL,
  `amount_in_millions` decimal(65,10) NOT NULL,
  `year` varchar(100) NOT NULL,
  PRIMARY KEY (`expenditure_id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_economic_classification_of_county_government_expenditure
CREATE TABLE IF NOT EXISTS `finance_economic_classification_of_county_government_expenditure` (
  `expenditure_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_government_expenditure` varchar(100) NOT NULL,
  `amount_in_millions` decimal(65,10) NOT NULL,
  `year` varchar(100) NOT NULL,
  PRIMARY KEY (`expenditure_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_economic_classification_revenue
CREATE TABLE IF NOT EXISTS `finance_economic_classification_revenue` (
  `economicrevenue_id` int(11) NOT NULL AUTO_INCREMENT,
  `taxes_income_profits_capitalgains` decimal(65,2) NOT NULL,
  `taxes_property` decimal(65,2) NOT NULL,
  `taxes_vat` decimal(65,2) NOT NULL,
  `taxes_othergoodsandservices` decimal(65,2) NOT NULL,
  `taxes_internationaltrade_transactions` decimal(65,2) NOT NULL,
  `other_taxes_notelsewhereclasified` decimal(65,2) NOT NULL,
  `totaltax_revenue` decimal(65,2) NOT NULL,
  `socialsecuritycontributions` decimal(65,2) NOT NULL,
  `property_income` decimal(65,2) NOT NULL,
  `sale_goodsandservices` decimal(65,2) NOT NULL,
  `fines_penaltiesandforfeitures` decimal(65,2) NOT NULL,
  `repayments_domesticlending` decimal(65,2) NOT NULL,
  `other_receiptsnotelsewhereclassified` decimal(65,2) NOT NULL,
  `total_nontax_revenue` decimal(65,2) NOT NULL,
  `total` decimal(65,2) NOT NULL,
  `year` varchar(250) NOT NULL,
  PRIMARY KEY (`economicrevenue_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_excise_revenue_commodity
CREATE TABLE IF NOT EXISTS `finance_excise_revenue_commodity` (
  `excise_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(100) NOT NULL,
  `beer` decimal(65,2) NOT NULL,
  `cigarettes` decimal(65,2) NOT NULL,
  `mineral_waters` decimal(65,2) NOT NULL,
  `wines_spirits` decimal(65,2) NOT NULL,
  `other_commodities` decimal(65,2) NOT NULL,
  `total` decimal(65,2) NOT NULL,
  PRIMARY KEY (`excise_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_expenditure_functions_county_governments
CREATE TABLE IF NOT EXISTS `finance_expenditure_functions_county_governments` (
  `cofog_id` int(11) NOT NULL AUTO_INCREMENT,
  `general_public_services` decimal(65,10) NOT NULL,
  `general_economic_affairs` decimal(65,10) NOT NULL,
  `economic_affairs_agriculture` decimal(65,10) NOT NULL,
  `economic_affairs_transport` decimal(65,10) NOT NULL,
  `other_economic_affairs` decimal(65,10) NOT NULL,
  `environmental_protection` decimal(65,10) NOT NULL,
  `housing_community_ammenities` decimal(65,10) NOT NULL,
  `health` decimal(65,10) NOT NULL,
  `recreation_culture_religion` decimal(65,10) NOT NULL,
  `education` decimal(65,10) NOT NULL,
  `social_protection` decimal(65,10) NOT NULL,
  `total` decimal(65,10) NOT NULL,
  `year` varchar(20) NOT NULL,
  PRIMARY KEY (`cofog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_money_banking_index
CREATE TABLE IF NOT EXISTS `finance_money_banking_index` (
  `institution_id` int(11) NOT NULL AUTO_INCREMENT,
  `financial_institution` varchar(100) NOT NULL,
  PRIMARY KEY (`institution_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_money_banking_institutions
CREATE TABLE IF NOT EXISTS `finance_money_banking_institutions` (
  `moneybanking_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `subcounty_id` int(11) NOT NULL,
  `institution_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`moneybanking_id`),
  KEY `finance_money_bankin_county_id_30ce7e6a_fk_health_co` (`county_id`),
  KEY `finance_money_bankin_institution_id_b0846684_fk_finance_m` (`institution_id`),
  CONSTRAINT `finance_money_bankin_county_id_30ce7e6a_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`),
  CONSTRAINT `finance_money_bankin_institution_id_b0846684_fk_finance_m` FOREIGN KEY (`institution_id`) REFERENCES `finance_money_banking_index` (`institution_id`)
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_national_government_expenditure
CREATE TABLE IF NOT EXISTS `finance_national_government_expenditure` (
  `government_expenditure_id` int(11) NOT NULL AUTO_INCREMENT,
  `acquisition_nonfinancial_assets` decimal(65,2) NOT NULL,
  `acquisition_financial_assets` decimal(65,2) NOT NULL,
  `loans_repayments` decimal(65,2) NOT NULL,
  `compensation_employees` decimal(65,2) NOT NULL,
  `goods_services` decimal(65,2) NOT NULL,
  `subsidies` decimal(65,2) NOT NULL,
  `interest` decimal(65,2) NOT NULL,
  `grants` decimal(65,2) NOT NULL,
  `other_expense` decimal(65,2) NOT NULL,
  `social_benefits` decimal(65,2) NOT NULL,
  `capital_grants` decimal(65,2) NOT NULL,
  `total` decimal(65,2) NOT NULL,
  `year` varchar(250) NOT NULL,
  PRIMARY KEY (`government_expenditure_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_national_government_expenditure_purpose
CREATE TABLE IF NOT EXISTS `finance_national_government_expenditure_purpose` (
  `purpose_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` year(4) NOT NULL,
  `general_publicservices` decimal(65,2) NOT NULL,
  `public_debttransactions` decimal(65,2) NOT NULL,
  `transfers` decimal(65,2) NOT NULL,
  `defense` decimal(65,2) NOT NULL,
  `order_safety` decimal(65,2) NOT NULL,
  `economic_commercial_labor` decimal(65,2) NOT NULL,
  `agriculture` decimal(65,2) NOT NULL,
  `fuel_energy` decimal(65,2) NOT NULL,
  `mining_manufacturing_construction` decimal(65,2) NOT NULL,
  `transport` decimal(65,2) NOT NULL,
  `communication` decimal(65,2) NOT NULL,
  `other_industries` decimal(65,2) NOT NULL,
  `environmental_protection` decimal(65,2) NOT NULL,
  `housing_communityamenities` decimal(65,2) NOT NULL,
  `health` decimal(65,2) NOT NULL,
  `recreation_culture_religion` decimal(65,2) NOT NULL,
  `education` decimal(65,2) NOT NULL,
  `socialprotection` decimal(65,2) NOT NULL,
  PRIMARY KEY (`purpose_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_outstanding_debt_international_organization
CREATE TABLE IF NOT EXISTS `finance_outstanding_debt_international_organization` (
  `outstanding_debt_id` int(11) NOT NULL AUTO_INCREMENT,
  `ida` decimal(15,2) NOT NULL,
  `eec_eib` decimal(15,2) NOT NULL,
  `imf` decimal(15,2) NOT NULL,
  `adf_adb` decimal(15,2) NOT NULL,
  `commercial_banks` decimal(15,2) NOT NULL,
  `others` decimal(15,2) NOT NULL,
  `year` varchar(50) NOT NULL,
  PRIMARY KEY (`outstanding_debt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_outstanding_debt_lending_country
CREATE TABLE IF NOT EXISTS `finance_outstanding_debt_lending_country` (
  `lending_country_id` int(11) NOT NULL AUTO_INCREMENT,
  `germany` decimal(65,2) NOT NULL,
  `japan` decimal(65,2) NOT NULL,
  `france` decimal(65,2) NOT NULL,
  `usa` decimal(65,2) NOT NULL,
  `netherlands` decimal(65,2) NOT NULL,
  `denmark` decimal(65,2) NOT NULL,
  `finland` decimal(65,2) NOT NULL,
  `china` decimal(65,2) NOT NULL,
  `belgium` decimal(65,2) NOT NULL,
  `other` decimal(65,2) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`lending_country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.finance_statement_of_national_government_operations
CREATE TABLE IF NOT EXISTS `finance_statement_of_national_government_operations` (
  `operation_id` int(11) NOT NULL AUTO_INCREMENT,
  `national_government_operation` varchar(100) NOT NULL,
  `amount_in_millions` decimal(65,10) NOT NULL,
  `year` varchar(100) NOT NULL,
  PRIMARY KEY (`operation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.general_request_dataset
CREATE TABLE IF NOT EXISTS `general_request_dataset` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `dataset` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_cases_forwarded_and_action_taken
CREATE TABLE IF NOT EXISTS `governance_cases_forwarded_and_action_taken` (
  `action_id` int(11) NOT NULL AUTO_INCREMENT,
  `action_taken` varchar(100) NOT NULL,
  `no_of_recommendations` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`action_id`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_cases_handled_by_ethics_commision
CREATE TABLE IF NOT EXISTS `governance_cases_handled_by_ethics_commision` (
  `cases_handled_id` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(100) NOT NULL,
  `no_cases` int(11) NOT NULL,
  `year` varchar(100) NOT NULL,
  PRIMARY KEY (`cases_handled_id`)
) ENGINE=InnoDB AUTO_INCREMENT=172 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_cases_handled_by_various_courts
CREATE TABLE IF NOT EXISTS `governance_cases_handled_by_various_courts` (
  `court_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `kadhis_court` int(11) NOT NULL,
  `magistrate_court` int(11) NOT NULL,
  `high_court` int(11) NOT NULL,
  `court_of_appeal` int(11) NOT NULL,
  `supreme_court` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`court_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_convicted_prisoners_by_type_of_offence_and_sex
CREATE TABLE IF NOT EXISTS `governance_convicted_prisoners_by_type_of_offence_and_sex` (
  `convicted_offence_type` int(11) NOT NULL AUTO_INCREMENT,
  `offence` varchar(100) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`convicted_offence_type`)
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_convicted_prison_population_by_age_and_sex
CREATE TABLE IF NOT EXISTS `governance_convicted_prison_population_by_age_and_sex` (
  `convict_population` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`convict_population`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_crimes_reported_to_police_by_command_stations
CREATE TABLE IF NOT EXISTS `governance_crimes_reported_to_police_by_command_stations` (
  `crime_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `crimes` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`crime_id`),
  KEY `governance_crimes_re_county_id_677f5852_fk_health_co` (`county_id`),
  CONSTRAINT `governance_crimes_re_county_id_677f5852_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=615 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_daily_average_population_of_prisoners_by_sex
CREATE TABLE IF NOT EXISTS `governance_daily_average_population_of_prisoners_by_sex` (
  `daily_population_prisoners_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`daily_population_prisoners_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_environmental_crimes_reported_to_nema
CREATE TABLE IF NOT EXISTS `governance_environmental_crimes_reported_to_nema` (
  `crime_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_of_case` varchar(100) NOT NULL,
  `no_of_cases` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`crime_id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_experienceof_domestic_violence_by_age
CREATE TABLE IF NOT EXISTS `governance_experienceof_domestic_violence_by_age` (
  `woman_id` int(11) NOT NULL AUTO_INCREMENT,
  `age` varchar(10) NOT NULL,
  `percentage_experienced_physical_violence` decimal(10,1) NOT NULL,
  `percentage_experienced_sexual_violence` decimal(10,1) NOT NULL,
  `percentage_experienced_physical_and_sexual_violence` decimal(10,1) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`woman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_experienceof_domestic_violence_by_marital_success
CREATE TABLE IF NOT EXISTS `governance_experienceof_domestic_violence_by_marital_success` (
  `woman_id` int(11) NOT NULL AUTO_INCREMENT,
  `marital_status` varchar(30) NOT NULL,
  `percentage_experienced_physical_violence` decimal(10,1) NOT NULL,
  `percentage_experienced_sexual_violence` decimal(10,1) NOT NULL,
  `percentage_experienced_physical_and_sexual_violence` decimal(10,1) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`woman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_experienceof_domestic_violence_by_residence
CREATE TABLE IF NOT EXISTS `governance_experienceof_domestic_violence_by_residence` (
  `woman_id` int(11) NOT NULL AUTO_INCREMENT,
  `residence` varchar(10) NOT NULL,
  `percentage_experienced_physical_violence` decimal(10,1) NOT NULL,
  `percentage_experienced_sexual_violence` decimal(10,1) NOT NULL,
  `percentage_experienced_physical_and_sexual_violence` decimal(10,1) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`woman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_firearms_and_ammunition_recovered_or_surrendered
CREATE TABLE IF NOT EXISTS `governance_firearms_and_ammunition_recovered_or_surrendered` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `rifles` int(11) NOT NULL,
  `pistols` int(11) NOT NULL,
  `toy_pistols` int(11) NOT NULL,
  `ammunition` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_identity_cards_made_processed_and_collected
CREATE TABLE IF NOT EXISTS `governance_identity_cards_made_processed_and_collected` (
  `nprs_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `npr_apps_made` int(11) NOT NULL,
  `npr_ids_prod` int(11) NOT NULL,
  `npr_ids_collected` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`nprs_id`),
  KEY `governance_identity__county_id_7e8a1b22_fk_health_co` (`county_id`),
  CONSTRAINT `governance_identity__county_id_7e8a1b22_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=189 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_knowledge_and_prevalence_of_female_circumcision
CREATE TABLE IF NOT EXISTS `governance_knowledge_and_prevalence_of_female_circumcision` (
  `woman_id` int(11) NOT NULL AUTO_INCREMENT,
  `age` varchar(10) NOT NULL,
  `percentage_women_heard_of_FC` decimal(10,1) NOT NULL,
  `percentage_women_not_heard_of_FC` decimal(10,1) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`woman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_magistrates_judges_and_practicing_lawyers
CREATE TABLE IF NOT EXISTS `governance_magistrates_judges_and_practicing_lawyers` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_members_of_nationalassembly_and_senators
CREATE TABLE IF NOT EXISTS `governance_members_of_nationalassembly_and_senators` (
  `woman_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(20) NOT NULL,
  `women` int(11) NOT NULL,
  `men` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `women_percentage` decimal(10,1) NOT NULL,
  PRIMARY KEY (`woman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_murder_cases_and_convictions_obtained_by_high_court
CREATE TABLE IF NOT EXISTS `governance_murder_cases_and_convictions_obtained_by_high_court` (
  `reg_murder_convictions_obtained_id` int(11) NOT NULL AUTO_INCREMENT,
  `court_station` varchar(100) NOT NULL,
  `registered_murder_cases` int(11) NOT NULL,
  `murder_convictions_obtained` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`reg_murder_convictions_obtained_id`)
) ENGINE=InnoDB AUTO_INCREMENT=219 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_number_of_police_prisons_and_probation_officers
CREATE TABLE IF NOT EXISTS `governance_number_of_police_prisons_and_probation_officers` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_number_of_refugees_by_age_and_sex
CREATE TABLE IF NOT EXISTS `governance_number_of_refugees_by_age_and_sex` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `children` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_offences_committed_against_morality
CREATE TABLE IF NOT EXISTS `governance_offences_committed_against_morality` (
  `offences_commiited_against_morality_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`offences_commiited_against_morality_id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_offence_by_sex_and_command_stations
CREATE TABLE IF NOT EXISTS `governance_offence_by_sex_and_command_stations` (
  `offence_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`offence_id`),
  KEY `governance_offence_b_county_id_e504a3b2_fk_health_co` (`county_id`),
  CONSTRAINT `governance_offence_b_county_id_e504a3b2_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=203 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_offenders_serving
CREATE TABLE IF NOT EXISTS `governance_offenders_serving` (
  `offence_id` int(11) NOT NULL AUTO_INCREMENT,
  `offence` varchar(100) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`offence_id`)
) ENGINE=InnoDB AUTO_INCREMENT=482 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_participation_in_key_decision_making_positions_by_sex
CREATE TABLE IF NOT EXISTS `governance_participation_in_key_decision_making_positions_by_sex` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `female` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `percentage` decimal(10,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_passports_work_permits_and_foreigners_registered
CREATE TABLE IF NOT EXISTS `governance_passports_work_permits_and_foreigners_registered` (
  `passports_permits_registered_foreigners_id` int(11) NOT NULL AUTO_INCREMENT,
  `passport_issued` int(11) NOT NULL,
  `foreign_nat_reg` int(11) NOT NULL,
  `work_permit_issued` int(11) NOT NULL,
  `work_permit_ren` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`passports_permits_registered_foreigners_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_persons_reported_committed_offences_related_to_drugs
CREATE TABLE IF NOT EXISTS `governance_persons_reported_committed_offences_related_to_drugs` (
  `offence_id` int(11) NOT NULL AUTO_INCREMENT,
  `offence` varchar(100) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`offence_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_persons_reported_tohave_committed_defilement
CREATE TABLE IF NOT EXISTS `governance_persons_reported_tohave_committed_defilement` (
  `persons_id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `proportion` decimal(10,1) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`persons_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_persons_reported_tohave_committed_rape
CREATE TABLE IF NOT EXISTS `governance_persons_reported_tohave_committed_rape` (
  `persons_id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `proportion` decimal(10,1) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`persons_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_persons_reported_to_have_committed_homicide_by_sex
CREATE TABLE IF NOT EXISTS `governance_persons_reported_to_have_committed_homicide_by_sex` (
  `offence_id` int(11) NOT NULL AUTO_INCREMENT,
  `offence` varchar(100) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`offence_id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_persons_reported_to_have_committed_robbery_and_theft
CREATE TABLE IF NOT EXISTS `governance_persons_reported_to_have_committed_robbery_and_theft` (
  `offence_id` int(11) NOT NULL AUTO_INCREMENT,
  `offence` varchar(100) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`offence_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_prevalence_female_circumcision_and_type
CREATE TABLE IF NOT EXISTS `governance_prevalence_female_circumcision_and_type` (
  `persons_id` int(11) NOT NULL AUTO_INCREMENT,
  `age` varchar(20) NOT NULL,
  `cut_no_flesh_removed` decimal(10,1) NOT NULL,
  `cut_flesh_removed` decimal(10,1) NOT NULL,
  `sewn_closed` decimal(10,1) NOT NULL,
  `others` decimal(10,1) NOT NULL,
  `percentage_women_circumcised` decimal(10,1) NOT NULL,
  PRIMARY KEY (`persons_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_prison_population_by_sentence_duration_and_sex
CREATE TABLE IF NOT EXISTS `governance_prison_population_by_sentence_duration_and_sex` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_public_assets_traced_recovered_and_loss_averted
CREATE TABLE IF NOT EXISTS `governance_public_assets_traced_recovered_and_loss_averted` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `public_assets_traced` decimal(10,2) NOT NULL,
  `public_assets_recovered` decimal(10,2) NOT NULL,
  `loss_averted` decimal(10,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_registered_voters_by_county_and_by_sex
CREATE TABLE IF NOT EXISTS `governance_registered_voters_by_county_and_by_sex` (
  `voters_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `sub_counties_id` int(11) NOT NULL,
  `reg_voters` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  PRIMARY KEY (`voters_id`),
  KEY `governance_registere_county_id_ef754726_fk_health_co` (`county_id`),
  CONSTRAINT `governance_registere_county_id_ef754726_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_total_prisoners_committed_for_debt_bysex
CREATE TABLE IF NOT EXISTS `governance_total_prisoners_committed_for_debt_bysex` (
  `persons_id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `proportion` decimal(10,1) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`persons_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_women_groups_registration_contributions_uwezo_funds
CREATE TABLE IF NOT EXISTS `governance_women_groups_registration_contributions_uwezo_funds` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_of_beneficiaries` int(11) NOT NULL,
  `uwezo_fund_disbursed` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_women_groups_registration_contributions_women_groups
CREATE TABLE IF NOT EXISTS `governance_women_groups_registration_contributions_women_groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `membership` int(11) NOT NULL,
  `group_contributions` bigint(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.governance_women_groups_registration_cont_women_enterprise_fund
CREATE TABLE IF NOT EXISTS `governance_women_groups_registration_cont_women_enterprise_fund` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_of_beneficiaries` int(11) NOT NULL,
  `women_enterprise_fund` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_counties
CREATE TABLE IF NOT EXISTS `health_counties` (
  `county_id` int(11) NOT NULL,
  `county_name` varchar(200) NOT NULL,
  PRIMARY KEY (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_current_use_of_contraception_by_county
CREATE TABLE IF NOT EXISTS `health_current_use_of_contraception_by_county` (
  `contraception_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `any_modem_method` decimal(10,2) NOT NULL,
  PRIMARY KEY (`contraception_id`),
  KEY `health_current_use_o_county_id_8651e47e_fk_health_co` (`county_id`),
  CONSTRAINT `health_current_use_o_county_id_8651e47e_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_distributionofoutpatientvisitsbytypeofhealthcareprovider
CREATE TABLE IF NOT EXISTS `health_distributionofoutpatientvisitsbytypeofhealthcareprovider` (
  `health_facility_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `public` decimal(10,2) NOT NULL,
  `private` decimal(10,2) NOT NULL,
  `faith_based` decimal(10,2) NOT NULL,
  `others` decimal(10,2) NOT NULL,
  PRIMARY KEY (`health_facility_id`),
  KEY `health_distributiono_county_id_9873e6b4_fk_health_co` (`county_id`),
  CONSTRAINT `health_distributiono_county_id_9873e6b4_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_early_childhood_mortality_rates_by_sex
CREATE TABLE IF NOT EXISTS `health_early_childhood_mortality_rates_by_sex` (
  `rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `mortality_rate` decimal(10,1) NOT NULL,
  `status` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`rate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_fertility_by_education_status
CREATE TABLE IF NOT EXISTS `health_fertility_by_education_status` (
  `fertility_id` int(11) NOT NULL AUTO_INCREMENT,
  `fertility` decimal(10,1) NOT NULL,
  `education_status` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`fertility_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_fertility_rate_by_age_and_residence
CREATE TABLE IF NOT EXISTS `health_fertility_rate_by_age_and_residence` (
  `fertility_id` int(11) NOT NULL AUTO_INCREMENT,
  `fertility_rate` decimal(10,1) NOT NULL,
  `age_group` varchar(10) NOT NULL,
  `residence` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`fertility_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_hiv_aids_awareness_and_testing
CREATE TABLE IF NOT EXISTS `health_hiv_aids_awareness_and_testing` (
  `awareness_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `male` decimal(10,2) NOT NULL,
  `female` decimal(10,2) NOT NULL,
  `hiv_awareness` varchar(100) NOT NULL,
  PRIMARY KEY (`awareness_id`),
  KEY `health_hiv_aids_awar_county_id_7f98f141_fk_health_co` (`county_id`),
  CONSTRAINT `health_hiv_aids_awar_county_id_7f98f141_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=427 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_immunization_rate
CREATE TABLE IF NOT EXISTS `health_immunization_rate` (
  `immunization_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `rate` decimal(65,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`immunization_id`),
  KEY `health_immunization_rate_county_id_d2b9a27d` (`county_id`),
  CONSTRAINT `health_immunization__county_id_d2b9a27d_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=238 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_insurance_coverage_by_counties_and_types
CREATE TABLE IF NOT EXISTS `health_insurance_coverage_by_counties_and_types` (
  `insurance_coverage_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `insured` decimal(10,2) NOT NULL,
  `nhif` decimal(10,2) NOT NULL,
  `cbhi` decimal(10,2) NOT NULL,
  `private` decimal(10,2) NOT NULL,
  `others` decimal(10,2) NOT NULL,
  PRIMARY KEY (`insurance_coverage_id`),
  KEY `health_insurance_cov_county_id_9885eb27_fk_health_co` (`county_id`),
  CONSTRAINT `health_insurance_cov_county_id_9885eb27_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_children_by_additional_supplement
CREATE TABLE IF NOT EXISTS `health_kihibs_children_by_additional_supplement` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `zinc_solution` decimal(10,1) NOT NULL,
  `sugar_salt_solution` decimal(10,1) NOT NULL,
  `other_solutions` decimal(10,1) NOT NULL,
  `none` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `health_kihibs_childr_county_id_847d0142_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_childr_county_id_847d0142_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_children_by_place_of_delivery
CREATE TABLE IF NOT EXISTS `health_kihibs_children_by_place_of_delivery` (
  `proportion_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `hospital` decimal(10,1) NOT NULL,
  `health_centre` decimal(10,1) NOT NULL,
  `clininc_dispensary` decimal(10,1) NOT NULL,
  `maternity_home` decimal(10,1) NOT NULL,
  `at_home` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  PRIMARY KEY (`proportion_id`),
  KEY `health_kihibs_childr_county_id_8d7fd490_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_childr_county_id_8d7fd490_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_children_by_who_assisted_at_birth
CREATE TABLE IF NOT EXISTS `health_kihibs_children_by_who_assisted_at_birth` (
  `proportion_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `doctor` decimal(10,1) NOT NULL,
  `midwife_nurse` decimal(10,1) NOT NULL,
  `tba` decimal(10,1) NOT NULL,
  `ttba` decimal(10,1) NOT NULL,
  `self` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  PRIMARY KEY (`proportion_id`),
  KEY `health_kihibs_childr_county_id_f688d5c4_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_childr_county_id_f688d5c4_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_children_immmunized_against_measles
CREATE TABLE IF NOT EXISTS `health_kihibs_children_immmunized_against_measles` (
  `proportion_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `measles_vaccination` varchar(50) NOT NULL,
  `proportion` decimal(10,1) NOT NULL,
  PRIMARY KEY (`proportion_id`),
  KEY `health_kihibs_childr_county_id_9ac992ed_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_childr_county_id_9ac992ed_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=236 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_children_that_had_diarrhoea
CREATE TABLE IF NOT EXISTS `health_kihibs_children_that_had_diarrhoea` (
  `proportion_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `yes` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  PRIMARY KEY (`proportion_id`),
  KEY `health_kihibs_childr_county_id_5269e5db_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_childr_county_id_5269e5db_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_disability_by_type
CREATE TABLE IF NOT EXISTS `health_kihibs_disability_by_type` (
  `proportion_id` int(11) NOT NULL AUTO_INCREMENT,
  `visual` decimal(10,1) NOT NULL,
  `hearing` decimal(10,1) NOT NULL,
  `speech` decimal(10,1) NOT NULL,
  `physical` decimal(10,1) NOT NULL,
  `mental` decimal(10,1) NOT NULL,
  `self_care` decimal(10,1) NOT NULL,
  `others` decimal(10,1) NOT NULL,
  `any_disability` decimal(10,1) NOT NULL,
  `no_disability` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`proportion_id`),
  KEY `health_kihibs_disabi_county_id_39423251_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_disabi_county_id_39423251_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_disability_that_had_difficulty
CREATE TABLE IF NOT EXISTS `health_kihibs_disability_that_had_difficulty` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `yes` decimal(10,1) NOT NULL,
  `no` decimal(10,1) NOT NULL,
  `dont_know` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `health_kihibs_disabi_county_id_f5bd1974_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_disabi_county_id_f5bd1974_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_health_insurance_cover_by_type
CREATE TABLE IF NOT EXISTS `health_kihibs_health_insurance_cover_by_type` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `nhif` decimal(10,1) NOT NULL,
  `private_contributory` decimal(10,1) NOT NULL,
  `private_non_contributory` decimal(10,1) NOT NULL,
  `employee_contributory` decimal(10,1) NOT NULL,
  `employee_non_contributory` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `health_kihibs_health_county_id_7fc6b495_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_health_county_id_7fc6b495_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_incidence_of_sickness_injury
CREATE TABLE IF NOT EXISTS `health_kihibs_incidence_of_sickness_injury` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `sick_injured` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `health_kihibs_incide_county_id_fc3034c4_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_incide_county_id_fc3034c4_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_received_free_medical_services
CREATE TABLE IF NOT EXISTS `health_kihibs_received_free_medical_services` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `percentage_distribution` decimal(10,1) NOT NULL,
  `service_type` varchar(10) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `health_kihibs_receiv_county_id_49c5e6a1_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_receiv_county_id_49c5e6a1_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_reported_being_sick_injured_by_cause
CREATE TABLE IF NOT EXISTS `health_kihibs_reported_being_sick_injured_by_cause` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `percentage_distribution` decimal(10,1) NOT NULL,
  `cause` varchar(10) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `health_kihibs_report_county_id_b557f059_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_report_county_id_b557f059_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_reported_being_sick_injured_by_type_of_sickness
CREATE TABLE IF NOT EXISTS `health_kihibs_reported_being_sick_injured_by_type_of_sickness` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `fever_malaria` decimal(10,1) NOT NULL,
  `stomach_problems` decimal(10,1) NOT NULL,
  `diarrhoea` decimal(10,1) NOT NULL,
  `vomiting` decimal(10,1) NOT NULL,
  `upper_respiratory_infection` decimal(10,1) NOT NULL,
  `lower_respiratory_infection` decimal(10,1) NOT NULL,
  `flu` decimal(10,1) NOT NULL,
  `asthma` decimal(10,1) NOT NULL,
  `headache` decimal(10,1) NOT NULL,
  `skin_problem` decimal(10,1) NOT NULL,
  `dental_problem` decimal(10,1) NOT NULL,
  `eye_problem` decimal(10,1) NOT NULL,
  `ear_nose_throat` decimal(10,1) NOT NULL,
  `backache` decimal(10,1) NOT NULL,
  `tb` decimal(10,1) NOT NULL,
  `heart_problem` decimal(10,1) NOT NULL,
  `blood_pressure` decimal(10,1) NOT NULL,
  `pain_while_passing_urine` decimal(10,1) NOT NULL,
  `diabetes` decimal(10,1) NOT NULL,
  `mental_disorder` decimal(10,1) NOT NULL,
  `stis` decimal(10,1) NOT NULL,
  `burn` decimal(10,1) NOT NULL,
  `fracture` decimal(10,1) NOT NULL,
  `wound_cut` decimal(10,1) NOT NULL,
  `poisoning` decimal(10,1) NOT NULL,
  `pregnancy_related` decimal(10,1) NOT NULL,
  `cancer` decimal(10,1) NOT NULL,
  `other_long_term_illness` decimal(10,1) NOT NULL,
  `hiv_aids` decimal(10,1) NOT NULL,
  `typhoid` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `health_kihibs_report_county_id_cf69c9e6_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_report_county_id_cf69c9e6_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_reported_sickness_by_age_group
CREATE TABLE IF NOT EXISTS `health_kihibs_reported_sickness_by_age_group` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `percentage_distribution` decimal(10,1) NOT NULL,
  `age_group` varchar(10) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `health_kihibs_report_county_id_0f69e62c_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_report_county_id_0f69e62c_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_reported_sickness_by_health_provider
CREATE TABLE IF NOT EXISTS `health_kihibs_reported_sickness_by_health_provider` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `percentage_distribution` decimal(10,1) NOT NULL,
  `health_provider` varchar(10) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `health_kihibs_report_county_id_7af8e58e_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_report_county_id_7af8e58e_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_reported_sickness_by_no_of_days_missed
CREATE TABLE IF NOT EXISTS `health_kihibs_reported_sickness_by_no_of_days_missed` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `percentage` decimal(10,1) NOT NULL,
  `no_of_days` varchar(10) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `health_kihibs_report_county_id_1c3d1540_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_report_county_id_1c3d1540_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_type_of_fluid_of_food_given_during_diarrhoea
CREATE TABLE IF NOT EXISTS `health_kihibs_type_of_fluid_of_food_given_during_diarrhoea` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `nothing` decimal(10,1) NOT NULL,
  `breastmilk` decimal(10,1) NOT NULL,
  `porridge` decimal(10,1) NOT NULL,
  `water_alone` decimal(10,1) NOT NULL,
  `other_milk` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `health_kihibs_type_o_county_id_781728ee_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_type_o_county_id_781728ee_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_type_of_food_given_during_diarrhoea
CREATE TABLE IF NOT EXISTS `health_kihibs_type_of_food_given_during_diarrhoea` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `nothing` decimal(10,1) NOT NULL,
  `commercial` decimal(10,1) NOT NULL,
  `other_semi_solid` decimal(10,1) NOT NULL,
  `fruits` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `health_kihibs_type_o_county_id_39bc1f0b_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_type_o_county_id_39bc1f0b_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_type_of_health_care_sought
CREATE TABLE IF NOT EXISTS `health_kihibs_type_of_health_care_sought` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `curative` decimal(10,1) NOT NULL,
  `promotive_preventive` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `health_kihibs_type_o_county_id_ba481e01_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_type_o_county_id_ba481e01_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_kihibs_who_diagnosed_illness_injury
CREATE TABLE IF NOT EXISTS `health_kihibs_who_diagnosed_illness_injury` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `health_worker` decimal(10,1) NOT NULL,
  `traditional_healer` decimal(10,1) NOT NULL,
  `non_household_member` decimal(10,1) NOT NULL,
  `self` decimal(10,1) NOT NULL,
  `herbalist` decimal(10,1) NOT NULL,
  `faith_healer` decimal(10,1) NOT NULL,
  `household_member` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `health_kihibs_who_di_county_id_7a405629_fk_health_co` (`county_id`),
  CONSTRAINT `health_kihibs_who_di_county_id_7a405629_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_maternal_care
CREATE TABLE IF NOT EXISTS `health_maternal_care` (
  `maternal_care_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `percent_receiving_antenatal_care_from_a_skilled_provider` decimal(10,2) NOT NULL,
  `percent_delivered_in_a_health_facility` decimal(10,2) NOT NULL,
  `percent_delivered_by_a_skilled_provider` decimal(10,2) NOT NULL,
  PRIMARY KEY (`maternal_care_id`),
  KEY `health_maternal_care_county_id_a2668183_fk_health_co` (`county_id`),
  CONSTRAINT `health_maternal_care_county_id_a2668183_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_months
CREATE TABLE IF NOT EXISTS `health_months` (
  `month_id` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(100) NOT NULL,
  PRIMARY KEY (`month_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_nhif_members
CREATE TABLE IF NOT EXISTS `health_nhif_members` (
  `nhif_member_id` int(11) NOT NULL AUTO_INCREMENT,
  `formal_sector` int(11) NOT NULL,
  `informal_sector` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `year` varchar(50) NOT NULL,
  PRIMARY KEY (`nhif_member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_nhif_resources
CREATE TABLE IF NOT EXISTS `health_nhif_resources` (
  `resource_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(50) NOT NULL,
  `benefits` bigint(20) NOT NULL,
  `contributions_net_benefits` bigint(20) NOT NULL,
  `receipts` bigint(20) NOT NULL,
  PRIMARY KEY (`resource_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_nutritional_status_of_children
CREATE TABLE IF NOT EXISTS `health_nutritional_status_of_children` (
  `nutrition_child_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `stunted` decimal(10,2) NOT NULL,
  `wasted` decimal(10,2) NOT NULL,
  `under_weight` decimal(10,2) NOT NULL,
  PRIMARY KEY (`nutrition_child_id`),
  KEY `health_nutritional_s_county_id_384c53aa_fk_health_co` (`county_id`),
  CONSTRAINT `health_nutritional_s_county_id_384c53aa_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_nutritional_status_of_women
CREATE TABLE IF NOT EXISTS `health_nutritional_status_of_women` (
  `nutrition_adult_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `undernutrition` decimal(10,2) NOT NULL,
  `normal` decimal(10,2) NOT NULL,
  `overweight` decimal(10,2) NOT NULL,
  `obese` decimal(10,2) NOT NULL,
  PRIMARY KEY (`nutrition_adult_id`),
  KEY `health_nutritional_s_county_id_a5b9cf80_fk_health_co` (`county_id`),
  CONSTRAINT `health_nutritional_s_county_id_a5b9cf80_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_percentage_adults_who_are_current_users
CREATE TABLE IF NOT EXISTS `health_percentage_adults_who_are_current_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `age_group` varchar(10) NOT NULL,
  `women` decimal(10,1) NOT NULL,
  `men` decimal(10,1) NOT NULL,
  `category` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_percentage_incidence_of_diseases_in_kenya
CREATE TABLE IF NOT EXISTS `health_percentage_incidence_of_diseases_in_kenya` (
  `incidence_id` int(11) NOT NULL AUTO_INCREMENT,
  `percentage_incidence` decimal(10,1) NOT NULL,
  `disease` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`incidence_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_percentage_who_drink_alcohol_by_age
CREATE TABLE IF NOT EXISTS `health_percentage_who_drink_alcohol_by_age` (
  `percentage_id` int(11) NOT NULL AUTO_INCREMENT,
  `age` varchar(10) NOT NULL,
  `women` decimal(10,1) NOT NULL,
  `men` decimal(10,1) NOT NULL,
  PRIMARY KEY (`percentage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_place_of_delivery
CREATE TABLE IF NOT EXISTS `health_place_of_delivery` (
  `place_id` int(11) NOT NULL AUTO_INCREMENT,
  `number` decimal(10,1) NOT NULL,
  `place` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`place_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_prevalence_of_overweight_and_obesity
CREATE TABLE IF NOT EXISTS `health_prevalence_of_overweight_and_obesity` (
  `prevalence_id` int(11) NOT NULL AUTO_INCREMENT,
  `age_group` varchar(10) NOT NULL,
  `women` int(11) NOT NULL,
  `men` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`prevalence_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_registeredmedicalpersonnel
CREATE TABLE IF NOT EXISTS `health_registeredmedicalpersonnel` (
  `registered_medical_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `medical_personnel_id` int(11) NOT NULL,
  `no_of_personnel` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`registered_medical_id`),
  KEY `health_registeredmed_county_id_6faad529_fk_health_co` (`county_id`),
  KEY `health_registeredmed_medical_personnel_id_3083eb86_fk_health_re` (`medical_personnel_id`),
  CONSTRAINT `health_registeredmed_county_id_6faad529_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`),
  CONSTRAINT `health_registeredmed_medical_personnel_id_3083eb86_fk_health_re` FOREIGN KEY (`medical_personnel_id`) REFERENCES `health_registeredmedicalpersonnel_ids` (`medical_personnel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1567 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_registeredmedicalpersonnel_ids
CREATE TABLE IF NOT EXISTS `health_registeredmedicalpersonnel_ids` (
  `medical_personnel_id` int(11) NOT NULL AUTO_INCREMENT,
  `medical_personnel` varchar(100) NOT NULL,
  PRIMARY KEY (`medical_personnel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_registered_active_nhif_members_by_county
CREATE TABLE IF NOT EXISTS `health_registered_active_nhif_members_by_county` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `formal` int(11) NOT NULL,
  `informal` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`member_id`),
  KEY `health_registered_ac_county_id_d025d6a8_fk_health_co` (`county_id`),
  CONSTRAINT `health_registered_ac_county_id_d025d6a8_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=283 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_registered_active_nhif_members_nationally
CREATE TABLE IF NOT EXISTS `health_registered_active_nhif_members_nationally` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `formal` int(11) NOT NULL,
  `informal` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_registered_medical_laboratories_by_counties
CREATE TABLE IF NOT EXISTS `health_registered_medical_laboratories_by_counties` (
  `reg_med_lab_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `class_a` int(11) NOT NULL,
  `class_b` int(11) NOT NULL,
  `class_c` int(11) NOT NULL,
  `class_d` int(11) NOT NULL,
  `class_e` int(11) NOT NULL,
  `class_f` int(11) NOT NULL,
  `unknown` int(11) NOT NULL,
  PRIMARY KEY (`reg_med_lab_id`),
  KEY `health_registered_me_county_id_a4bf60dd_fk_health_co` (`county_id`),
  CONSTRAINT `health_registered_me_county_id_a4bf60dd_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_sectors
CREATE TABLE IF NOT EXISTS `health_sectors` (
  `sector_id` int(11) NOT NULL AUTO_INCREMENT,
  `sector_name` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL,
  `coverage` varchar(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `api_url` varchar(100) NOT NULL,
  `embed_script` longtext NOT NULL,
  PRIMARY KEY (`sector_id`)
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_subcounty
CREATE TABLE IF NOT EXISTS `health_subcounty` (
  `count_id` int(11) NOT NULL,
  `subcounty_id` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  `subcounty_name` varchar(100) NOT NULL,
  PRIMARY KEY (`count_id`),
  KEY `health_subcounty_county_id_70a96d7d_fk_health_counties_county_id` (`county_id`),
  CONSTRAINT `health_subcounty_county_id_70a96d7d_fk_health_counties_county_id` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.health_use_of_mosquito_nets_by_children
CREATE TABLE IF NOT EXISTS `health_use_of_mosquito_nets_by_children` (
  `use_mosquito_net_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `children_under_five_years_who_slept_under_nets_last_night` decimal(10,2) NOT NULL,
  PRIMARY KEY (`use_mosquito_net_id`),
  KEY `health_use_of_mosqui_county_id_0728aee5_fk_health_co` (`county_id`),
  CONSTRAINT `health_use_of_mosqui_county_id_0728aee5_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.household_income_household_kihibs_households_that_sought_credit
CREATE TABLE IF NOT EXISTS `household_income_household_kihibs_households_that_sought_credit` (
  `proportion_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `h_sought` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `h_a_sought` decimal(10,1) NOT NULL,
  `hholds_sought` int(11) NOT NULL,
  PRIMARY KEY (`proportion_id`),
  KEY `Household_Income_hou_county_id_ffa3878a_fk_health_co` (`county_id`),
  CONSTRAINT `Household_Income_hou_county_id_ffa3878a_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_hholds_by_habitable_rooms
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_hholds_by_habitable_rooms` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `one` decimal(10,1) NOT NULL,
  `two` decimal(10,1) NOT NULL,
  `three` decimal(10,1) NOT NULL,
  `four` decimal(10,1) NOT NULL,
  `five` decimal(10,1) NOT NULL,
  `six_plus` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `mean_rooms` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `persons_per_room` decimal(10,1) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`room_id`),
  KEY `Housing_Conditions_k_county_id_422d917a_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_422d917a_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_hholds_by_housing_tenure
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_hholds_by_housing_tenure` (
  `tenure_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_occupier` decimal(10,1) NOT NULL,
  `pays_rent` decimal(10,1) NOT NULL,
  `no_rent_consent` decimal(10,1) NOT NULL,
  `no_rent_squatting` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`tenure_id`),
  KEY `Housing_Conditions_k_county_id_966e936d_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_966e936d_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_hholds_by_type_of_housing_unit
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_hholds_by_type_of_housing_unit` (
  `unit_id` int(11) NOT NULL AUTO_INCREMENT,
  `bungalow` decimal(10,1) NOT NULL,
  `flat` decimal(10,1) NOT NULL,
  `maisonnette` decimal(10,1) NOT NULL,
  `swahili` decimal(10,1) NOT NULL,
  `shanty` decimal(10,1) NOT NULL,
  `manyatta` decimal(10,1) NOT NULL,
  `landhi` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`unit_id`),
  KEY `Housing_Conditions_k_county_id_06d94ea3_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_06d94ea3_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_hholds_in_rented_dwellings
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_hholds_in_rented_dwellings` (
  `dwelling_id` int(11) NOT NULL AUTO_INCREMENT,
  `govt_national` decimal(10,1) NOT NULL,
  `govt_county` decimal(10,1) NOT NULL,
  `parastatal` decimal(10,1) NOT NULL,
  `company_directly` decimal(10,1) NOT NULL,
  `company_agent` decimal(10,1) NOT NULL,
  `individual_directly` decimal(10,1) NOT NULL,
  `individual_agent` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`dwelling_id`),
  KEY `Housing_Conditions_k_county_id_1efd2f72_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_1efd2f72_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_main_floor_material
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_main_floor_material` (
  `material_id` int(11) NOT NULL AUTO_INCREMENT,
  `tiles` decimal(10,1) NOT NULL,
  `cement` decimal(10,1) NOT NULL,
  `wood` decimal(10,1) NOT NULL,
  `cow_dung` decimal(10,1) NOT NULL,
  `sand` decimal(10,1) NOT NULL,
  `carpet` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`material_id`),
  KEY `Housing_Conditions_k_county_id_fed5e688_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_fed5e688_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_main_roofing_material
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_main_roofing_material` (
  `material_id` int(11) NOT NULL AUTO_INCREMENT,
  `grass` decimal(10,1) NOT NULL,
  `mud` decimal(10,1) NOT NULL,
  `iron_sheets` decimal(10,1) NOT NULL,
  `tin_cans` decimal(10,1) NOT NULL,
  `sheet` decimal(10,1) NOT NULL,
  `concrete` decimal(10,1) NOT NULL,
  `tiles` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`material_id`),
  KEY `Housing_Conditions_k_county_id_7273c444_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_7273c444_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_main_source_of_cooking_fuel
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_main_source_of_cooking_fuel` (
  `source_id` int(11) NOT NULL AUTO_INCREMENT,
  `firewood` decimal(10,1) NOT NULL,
  `electricity` decimal(10,1) NOT NULL,
  `lpg` decimal(10,1) NOT NULL,
  `biogas` decimal(10,1) NOT NULL,
  `kerosene` decimal(10,1) NOT NULL,
  `charcoal` decimal(10,1) NOT NULL,
  `shrubs` decimal(10,1) NOT NULL,
  `animal_dung` decimal(10,1) NOT NULL,
  `crop_residue` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`source_id`),
  KEY `Housing_Conditions_k_county_id_8f8710fb_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_8f8710fb_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_main_source_of_drinking_water
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_main_source_of_drinking_water` (
  `source_id` int(11) NOT NULL AUTO_INCREMENT,
  `piped_dwelling` decimal(10,1) NOT NULL,
  `piped_yard` decimal(10,1) NOT NULL,
  `piped_tap` decimal(10,1) NOT NULL,
  `tubewell` decimal(10,1) NOT NULL,
  `protected_well` decimal(10,1) NOT NULL,
  `protected_spring` decimal(10,1) NOT NULL,
  `rain_water` decimal(10,1) NOT NULL,
  `bottled_water` decimal(10,1) NOT NULL,
  `unprotected_well` decimal(10,1) NOT NULL,
  `unprotected_spring` decimal(10,1) NOT NULL,
  `vendor_truck` decimal(10,1) NOT NULL,
  `vendor_drum` decimal(10,1) NOT NULL,
  `vendor_bicycles` decimal(10,1) NOT NULL,
  `surface_water` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`source_id`),
  KEY `Housing_Conditions_k_county_id_d82e74fa_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_d82e74fa_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_main_source_of_lighting_fuel
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_main_source_of_lighting_fuel` (
  `source_id` int(11) NOT NULL AUTO_INCREMENT,
  `electricity` decimal(10,1) NOT NULL,
  `generator` decimal(10,1) NOT NULL,
  `solar_energy` decimal(10,1) NOT NULL,
  `paraffin_lantern` decimal(10,1) NOT NULL,
  `paraffin_tin_lamp` decimal(10,1) NOT NULL,
  `paraffin_pressure_lamp` decimal(10,1) NOT NULL,
  `fuel_wood` decimal(10,1) NOT NULL,
  `gas_lamp` decimal(10,1) NOT NULL,
  `battery_lamp` decimal(10,1) NOT NULL,
  `candles` decimal(10,1) NOT NULL,
  `biogas` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`source_id`),
  KEY `Housing_Conditions_k_county_id_88ac1abe_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_88ac1abe_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_main_toilet_facility
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_main_toilet_facility` (
  `facility_id` int(11) NOT NULL AUTO_INCREMENT,
  `piped_sewer` decimal(10,1) NOT NULL,
  `septic_tank` decimal(10,1) NOT NULL,
  `latrine` decimal(10,1) NOT NULL,
  `vip` decimal(10,1) NOT NULL,
  `latrine_slab` decimal(10,1) NOT NULL,
  `composting_toilet` decimal(10,1) NOT NULL,
  `somewhere_else` decimal(10,1) NOT NULL,
  `unknown_place` decimal(10,1) NOT NULL,
  `without_slab` decimal(10,1) NOT NULL,
  `bucket_toilet` decimal(10,1) NOT NULL,
  `hanging_toilet` decimal(10,1) NOT NULL,
  `bush` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`facility_id`),
  KEY `Housing_Conditions_k_county_id_f3fa2bd5_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_f3fa2bd5_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_main_wall_material
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_main_wall_material` (
  `material_id` int(11) NOT NULL AUTO_INCREMENT,
  `lime_stone` decimal(10,1) NOT NULL,
  `bricks` decimal(10,1) NOT NULL,
  `cement_blocks` decimal(10,1) NOT NULL,
  `cement_finish` decimal(10,1) NOT NULL,
  `wood` decimal(10,1) NOT NULL,
  `adobe` decimal(10,1) NOT NULL,
  `iron_sheets` decimal(10,1) NOT NULL,
  `bamboo` decimal(10,1) NOT NULL,
  `stone` decimal(10,1) NOT NULL,
  `cane` decimal(10,1) NOT NULL,
  `plywood` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`material_id`),
  KEY `Housing_Conditions_k_county_id_c97cb18e_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_c97cb18e_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_methods_used_to_make_water_safer
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_methods_used_to_make_water_safer` (
  `method_id` int(11) NOT NULL AUTO_INCREMENT,
  `boil` decimal(10,1) NOT NULL,
  `add_bleach` decimal(10,1) NOT NULL,
  `water_filter` decimal(10,1) NOT NULL,
  `solar` decimal(10,1) NOT NULL,
  `sieve_cloth` decimal(10,1) NOT NULL,
  `stand_settle` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`method_id`),
  KEY `Housing_Conditions_k_county_id_d8893cba_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_d8893cba_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_owner_occupier_dwellings
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_owner_occupier_dwellings` (
  `dwelling_id` int(11) NOT NULL AUTO_INCREMENT,
  `purchased_cash` decimal(10,1) NOT NULL,
  `purchased_loan` decimal(10,1) NOT NULL,
  `purchased_cash_loan` decimal(10,1) NOT NULL,
  `constructed_cash` decimal(10,1) NOT NULL,
  `constructed_loan` decimal(10,1) NOT NULL,
  `constructed_cash_loan` decimal(10,1) NOT NULL,
  `inherited` decimal(10,1) NOT NULL,
  `gift` decimal(10,1) NOT NULL,
  `bartered` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`dwelling_id`),
  KEY `Housing_Conditions_k_county_id_97d2b8e6_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_97d2b8e6_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_place_for_washing_hands_near_toilet
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_place_for_washing_hands_near_toilet` (
  `place_id` int(11) NOT NULL AUTO_INCREMENT,
  `place` decimal(10,1) NOT NULL,
  `no_place` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`place_id`),
  KEY `Housing_Conditions_k_county_id_7bcb29b2_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_7bcb29b2_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_primary_type_of_cooking_appliance
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_primary_type_of_cooking_appliance` (
  `appliance_id` int(11) NOT NULL AUTO_INCREMENT,
  `stone_fire` decimal(10,1) NOT NULL,
  `imp_stone_fire` decimal(10,1) NOT NULL,
  `ordinary_jiko` decimal(10,1) NOT NULL,
  `improved_jiko` decimal(10,1) NOT NULL,
  `stove` decimal(10,1) NOT NULL,
  `gas_cooker` decimal(10,1) NOT NULL,
  `electric_cooker` decimal(10,1) NOT NULL,
  `elec_gas_cooker` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`appliance_id`),
  KEY `Housing_Conditions_k_county_id_c770eee1_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_c770eee1_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_sharing_of_toilet_facility
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_sharing_of_toilet_facility` (
  `proportion_id` int(11) NOT NULL AUTO_INCREMENT,
  `shared_toilet` decimal(10,1) NOT NULL,
  `not_shared` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`proportion_id`),
  KEY `Housing_Conditions_k_county_id_5e383fbc_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_5e383fbc_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_time_taken_to_fetch_drinking_water
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_time_taken_to_fetch_drinking_water` (
  `time_id` int(11) NOT NULL AUTO_INCREMENT,
  `zero` decimal(10,1) NOT NULL,
  `less_thirty_min` decimal(10,1) NOT NULL,
  `over_thirty_min` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`time_id`),
  KEY `Housing_Conditions_k_county_id_cedc8c5b_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_cedc8c5b_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_volume_of_water_used
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_volume_of_water_used` (
  `volume_id` int(11) NOT NULL AUTO_INCREMENT,
  `lit_0_1000` decimal(10,1) NOT NULL,
  `lit_1001_2000` decimal(10,1) NOT NULL,
  `lit_2001_3000` decimal(10,1) NOT NULL,
  `over_3000_lit` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`volume_id`),
  KEY `Housing_Conditions_k_county_id_97e33487_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_97e33487_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.housing_conditions_kihibs_waste_disposal_method
CREATE TABLE IF NOT EXISTS `housing_conditions_kihibs_waste_disposal_method` (
  `method_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_gov` decimal(10,1) NOT NULL,
  `community` decimal(10,1) NOT NULL,
  `private_co` decimal(10,1) NOT NULL,
  `dumped_compound` decimal(10,1) NOT NULL,
  `dumped_street` decimal(10,1) NOT NULL,
  `dumped_latrine` decimal(10,1) NOT NULL,
  `burnt` decimal(10,1) NOT NULL,
  `buried` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`method_id`),
  KEY `Housing_Conditions_k_county_id_089c0c87_fk_health_co` (`county_id`),
  CONSTRAINT `Housing_Conditions_k_county_id_089c0c87_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.ict_kihibs_households_owned_ict_equipment_services
CREATE TABLE IF NOT EXISTS `ict_kihibs_households_owned_ict_equipment_services` (
  `household_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `computer` decimal(10,1) NOT NULL,
  `television` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  PRIMARY KEY (`household_id`),
  KEY `ICT_kihibs_household_county_id_baadf7ca_fk_health_co` (`county_id`),
  CONSTRAINT `ICT_kihibs_household_county_id_baadf7ca_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.ict_kihibs_households_without_internet_by_reason
CREATE TABLE IF NOT EXISTS `ict_kihibs_households_without_internet_by_reason` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `dont_need` decimal(10,1) NOT NULL,
  `lack_skills` decimal(10,1) NOT NULL,
  `no_network` decimal(10,1) NOT NULL,
  `access_elsewhere` decimal(10,1) NOT NULL,
  `doesnt_meet_needs` decimal(10,1) NOT NULL,
  `service_cost_high` decimal(10,1) NOT NULL,
  `equipment_cost_high` decimal(10,1) NOT NULL,
  `cultural_reasons` decimal(10,1) NOT NULL,
  `other_reasons` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `ICT_kihibs_household_county_id_2265ca4c_fk_health_co` (`county_id`),
  CONSTRAINT `ICT_kihibs_household_county_id_2265ca4c_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.ict_kihibs_households_with_internet_by_type
CREATE TABLE IF NOT EXISTS `ict_kihibs_households_with_internet_by_type` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `fixed_wired` decimal(10,1) NOT NULL,
  `fixed_wireless` decimal(10,1) NOT NULL,
  `mobile_broadband` decimal(10,1) NOT NULL,
  `mobile` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `ICT_kihibs_household_county_id_57b4e1ec_fk_health_co` (`county_id`),
  CONSTRAINT `ICT_kihibs_household_county_id_57b4e1ec_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.ict_kihibs_households_with_tv
CREATE TABLE IF NOT EXISTS `ict_kihibs_households_with_tv` (
  `household_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `digital_tv` decimal(10,1) NOT NULL,
  `pay_tv` decimal(10,1) NOT NULL,
  `free_to_air` decimal(10,1) NOT NULL,
  `ip_tv` decimal(10,1) NOT NULL,
  `none` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  PRIMARY KEY (`household_id`),
  KEY `ICT_kihibs_household_county_id_87cd4cfb_fk_health_co` (`county_id`),
  CONSTRAINT `ICT_kihibs_household_county_id_87cd4cfb_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.ict_kihibs_population_above18by_reasonnothaving_phone
CREATE TABLE IF NOT EXISTS `ict_kihibs_population_above18by_reasonnothaving_phone` (
  `population_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `population` int(11) NOT NULL,
  `too_young` decimal(10,1) NOT NULL,
  `dont_need` decimal(10,1) NOT NULL,
  `restricted` decimal(10,1) NOT NULL,
  `no_network` decimal(10,1) NOT NULL,
  `gender_bias` decimal(10,1) NOT NULL,
  `no_electricity` decimal(10,1) NOT NULL,
  `phone_expe` decimal(10,1) NOT NULL,
  `maintain_expe` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  PRIMARY KEY (`population_id`),
  KEY `ICT_kihibs_populatio_county_id_9b76752c_fk_health_co` (`county_id`),
  CONSTRAINT `ICT_kihibs_populatio_county_id_9b76752c_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.ict_kihibs_population_above18subscribed_mobilemoney
CREATE TABLE IF NOT EXISTS `ict_kihibs_population_above18subscribed_mobilemoney` (
  `proportion_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `mobile_money` decimal(10,1) NOT NULL,
  `mobile_banking` decimal(10,1) NOT NULL,
  `population` int(11) NOT NULL,
  PRIMARY KEY (`proportion_id`),
  KEY `ICT_kihibs_populatio_county_id_c7f20eea_fk_health_co` (`county_id`),
  CONSTRAINT `ICT_kihibs_populatio_county_id_c7f20eea_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.ict_kihibs_population_by_ictequipment_and_servicesused
CREATE TABLE IF NOT EXISTS `ict_kihibs_population_by_ictequipment_and_servicesused` (
  `proportion_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `television` decimal(10,1) NOT NULL,
  `radio` decimal(10,1) NOT NULL,
  `mobile` decimal(10,1) NOT NULL,
  `computer` decimal(10,1) NOT NULL,
  `internet` decimal(10,1) NOT NULL,
  `population` int(11) NOT NULL,
  PRIMARY KEY (`proportion_id`),
  KEY `ICT_kihibs_populatio_county_id_57a2ab81_fk_health_co` (`county_id`),
  CONSTRAINT `ICT_kihibs_populatio_county_id_57a2ab81_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.ict_kihibs_population_that_didntuseinternet_by_reason
CREATE TABLE IF NOT EXISTS `ict_kihibs_population_that_didntuseinternet_by_reason` (
  `proportion_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `too_young` decimal(10,1) NOT NULL,
  `dont_need` decimal(10,1) NOT NULL,
  `lack_skill` decimal(10,1) NOT NULL,
  `expensive` decimal(10,1) NOT NULL,
  `no_internet` decimal(10,1) NOT NULL,
  `culture` decimal(10,1) NOT NULL,
  `control` decimal(10,1) NOT NULL,
  `security` decimal(10,1) NOT NULL,
  `others` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `population` int(11) NOT NULL,
  PRIMARY KEY (`proportion_id`),
  KEY `ICT_kihibs_populatio_county_id_41f4c06d_fk_health_co` (`county_id`),
  CONSTRAINT `ICT_kihibs_populatio_county_id_41f4c06d_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.ict_kihibs_population_that_used_internet_by_purpose
CREATE TABLE IF NOT EXISTS `ict_kihibs_population_that_used_internet_by_purpose` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `seek_info` decimal(10,1) NOT NULL,
  `make_app` decimal(10,1) NOT NULL,
  `get_info` decimal(10,1) NOT NULL,
  `newspaper` decimal(10,1) NOT NULL,
  `banking` decimal(10,1) NOT NULL,
  `voip` decimal(10,1) NOT NULL,
  `selling` decimal(10,1) NOT NULL,
  `ordering` decimal(10,1) NOT NULL,
  `course` decimal(10,1) NOT NULL,
  `research` decimal(10,1) NOT NULL,
  `informative` decimal(10,1) NOT NULL,
  `write_article` decimal(10,1) NOT NULL,
  `social_nets` decimal(10,1) NOT NULL,
  `movie` decimal(10,1) NOT NULL,
  `search_work` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `population` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `ICT_kihibs_populatio_county_id_951c00f4_fk_health_co` (`county_id`),
  CONSTRAINT `ICT_kihibs_populatio_county_id_951c00f4_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.ict_kihibs_population_who_used_internet_by_place
CREATE TABLE IF NOT EXISTS `ict_kihibs_population_who_used_internet_by_place` (
  `proportion_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `mobility` decimal(10,1) NOT NULL,
  `work` decimal(10,1) NOT NULL,
  `cyber` decimal(10,1) NOT NULL,
  `ed_centre` decimal(10,1) NOT NULL,
  `comm_centre` decimal(10,1) NOT NULL,
  `another_home` decimal(10,1) NOT NULL,
  `at_home` decimal(10,1) NOT NULL,
  `other` decimal(10,1) NOT NULL,
  `population` int(11) NOT NULL,
  PRIMARY KEY (`proportion_id`),
  KEY `ICT_kihibs_populatio_county_id_a0febad9_fk_health_co` (`county_id`),
  CONSTRAINT `ICT_kihibs_populatio_county_id_a0febad9_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.ict_kihibs_population_withmobilephone_andaveragesims
CREATE TABLE IF NOT EXISTS `ict_kihibs_population_withmobilephone_andaveragesims` (
  `proportion_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `phone` decimal(10,1) NOT NULL,
  `population` int(11) NOT NULL,
  `avg_sims` decimal(10,1) NOT NULL,
  `population_sims` int(11) NOT NULL,
  PRIMARY KEY (`proportion_id`),
  KEY `ICT_kihibs_populatio_county_id_96f230df_fk_health_co` (`county_id`),
  CONSTRAINT `ICT_kihibs_populatio_county_id_96f230df_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.labour_average_wage_earnings_per_employee_private_sector
CREATE TABLE IF NOT EXISTS `labour_average_wage_earnings_per_employee_private_sector` (
  `wage_earnings_id` int(11) NOT NULL AUTO_INCREMENT,
  `private_sector` varchar(120) NOT NULL,
  `wage_earnings` decimal(20,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`wage_earnings_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.labour_average_wage_earnings_per_employee_public_sector
CREATE TABLE IF NOT EXISTS `labour_average_wage_earnings_per_employee_public_sector` (
  `wage_earnings_id` int(11) NOT NULL AUTO_INCREMENT,
  `public_sector` varchar(120) NOT NULL,
  `wage_earnings` decimal(20,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`wage_earnings_id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.labour_employment_public_sector
CREATE TABLE IF NOT EXISTS `labour_employment_public_sector` (
  `wage_employment_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `wage_employment` int(11) NOT NULL,
  PRIMARY KEY (`wage_employment_id`),
  KEY `labour_employment_pu_county_id_d8a688f0_fk_health_co` (`county_id`),
  KEY `labour_employment_pu_sector_id_51971685_fk_labour_se` (`sector_id`),
  CONSTRAINT `labour_employment_pu_county_id_d8a688f0_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`),
  CONSTRAINT `labour_employment_pu_sector_id_51971685_fk_labour_se` FOREIGN KEY (`sector_id`) REFERENCES `labour_sectors` (`sector_id`)
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.labour_memorandum_items_in_public_sector
CREATE TABLE IF NOT EXISTS `labour_memorandum_items_in_public_sector` (
  `memorandum_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `memorandum_item` varchar(100) NOT NULL,
  `wage_earnings` decimal(20,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`memorandum_item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.labour_sectors
CREATE TABLE IF NOT EXISTS `labour_sectors` (
  `sector_id` int(11) NOT NULL AUTO_INCREMENT,
  `sector_name` varchar(100) NOT NULL,
  PRIMARY KEY (`sector_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.labour_total_recorded_employment
CREATE TABLE IF NOT EXISTS `labour_total_recorded_employment` (
  `total_employment_id` int(11) NOT NULL AUTO_INCREMENT,
  `sector_category` varchar(100) NOT NULL,
  `total_employment` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`total_employment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.labour_wage_employment_by_industry_and_sex
CREATE TABLE IF NOT EXISTS `labour_wage_employment_by_industry_and_sex` (
  `wage_employment_id` int(11) NOT NULL AUTO_INCREMENT,
  `industry` varchar(120) NOT NULL,
  `wage_employment` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`wage_employment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.labour_wage_employment_by_industry_in_private_sector
CREATE TABLE IF NOT EXISTS `labour_wage_employment_by_industry_in_private_sector` (
  `wage_employment_id` int(11) NOT NULL AUTO_INCREMENT,
  `private_sector` varchar(120) NOT NULL,
  `wage_employment` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`wage_employment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.labour_wage_employment_by_industry_in_public_sector
CREATE TABLE IF NOT EXISTS `labour_wage_employment_by_industry_in_public_sector` (
  `wage_employment_id` int(11) NOT NULL AUTO_INCREMENT,
  `public_sector` varchar(100) NOT NULL,
  `wage_employment` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`wage_employment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.land_and_climate_environment_impact_assessments_by_sector
CREATE TABLE IF NOT EXISTS `land_and_climate_environment_impact_assessments_by_sector` (
  `sector_id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` varchar(100) NOT NULL,
  `environmental_impact` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`sector_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.land_and_climate_rainfall
CREATE TABLE IF NOT EXISTS `land_and_climate_rainfall` (
  `climate_rainfall_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `rainfall_id` int(11) NOT NULL,
  `rainfall_in_mm` double NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`climate_rainfall_id`),
  KEY `land_and_climate_rai_county_id_1fb05fd1_fk_health_co` (`county_id`),
  KEY `land_and_climate_rai_rainfall_id_b5f53df7_fk_land_and_` (`rainfall_id`),
  CONSTRAINT `land_and_climate_rai_county_id_1fb05fd1_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`),
  CONSTRAINT `land_and_climate_rai_rainfall_id_b5f53df7_fk_land_and_` FOREIGN KEY (`rainfall_id`) REFERENCES `land_and_climate_rainfall_ids` (`rainfall_id`)
) ENGINE=InnoDB AUTO_INCREMENT=209 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.land_and_climate_rainfall_ids
CREATE TABLE IF NOT EXISTS `land_and_climate_rainfall_ids` (
  `rainfall_id` int(11) NOT NULL AUTO_INCREMENT,
  `rainFall` varchar(100) NOT NULL,
  PRIMARY KEY (`rainfall_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.land_and_climate_surface_area_by_category
CREATE TABLE IF NOT EXISTS `land_and_climate_surface_area_by_category` (
  `surface_area_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `area_sq_km` double NOT NULL,
  PRIMARY KEY (`surface_area_id`),
  KEY `land_and_climate_sur_category_id_c11af74a_fk_land_and_` (`category_id`),
  KEY `land_and_climate_sur_county_id_b0eaf2dd_fk_health_co` (`county_id`),
  CONSTRAINT `land_and_climate_sur_category_id_c11af74a_fk_land_and_` FOREIGN KEY (`category_id`) REFERENCES `land_and_climate_surface_area_by_category_ids` (`category_id`),
  CONSTRAINT `land_and_climate_sur_county_id_b0eaf2dd_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=207 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.land_and_climate_surface_area_by_category_ids
CREATE TABLE IF NOT EXISTS `land_and_climate_surface_area_by_category_ids` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `categories` varchar(100) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.land_and_climate_temperature
CREATE TABLE IF NOT EXISTS `land_and_climate_temperature` (
  `climate_temperature_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `temperature_id` int(11) NOT NULL,
  `temp_celsius_degrees` double NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`climate_temperature_id`),
  KEY `land_and_climate_tem_county_id_883c2b4a_fk_health_co` (`county_id`),
  KEY `land_and_climate_tem_temperature_id_9e02db02_fk_land_and_` (`temperature_id`),
  CONSTRAINT `land_and_climate_tem_county_id_883c2b4a_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`),
  CONSTRAINT `land_and_climate_tem_temperature_id_9e02db02_fk_land_and_` FOREIGN KEY (`temperature_id`) REFERENCES `land_and_climate_temperature_ids` (`temperature_id`)
) ENGINE=InnoDB AUTO_INCREMENT=206 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.land_and_climate_temperature_ids
CREATE TABLE IF NOT EXISTS `land_and_climate_temperature_ids` (
  `temperature_id` int(11) NOT NULL AUTO_INCREMENT,
  `temperatures` varchar(100) NOT NULL,
  PRIMARY KEY (`temperature_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.land_and_climate_topography_altitude
CREATE TABLE IF NOT EXISTS `land_and_climate_topography_altitude` (
  `altitude_topography_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `geography_type` varchar(100) NOT NULL,
  `altitude_in_metres` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`altitude_topography_id`),
  KEY `land_and_climate_top_county_id_8defb0c6_fk_health_co` (`county_id`),
  CONSTRAINT `land_and_climate_top_county_id_8defb0c6_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.land_and_climate_trends_in_environment_and_natural_resources
CREATE TABLE IF NOT EXISTS `land_and_climate_trends_in_environment_and_natural_resources` (
  `industry_id` int(11) NOT NULL AUTO_INCREMENT,
  `industry` varchar(100) NOT NULL,
  `value_added` bigint(20) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`industry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.land_and_climate_wildlife_population_estimates_kenya_rangelands
CREATE TABLE IF NOT EXISTS `land_and_climate_wildlife_population_estimates_kenya_rangelands` (
  `species_id` int(11) NOT NULL AUTO_INCREMENT,
  `animal` varchar(100) NOT NULL,
  `no_estimate` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`species_id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.manufacturing_per_change_in_quantum_indices_of_man_production
CREATE TABLE IF NOT EXISTS `manufacturing_per_change_in_quantum_indices_of_man_production` (
  `percentage_change_id` int(11) NOT NULL AUTO_INCREMENT,
  `commodity` varchar(200) NOT NULL,
  `percentage_change` decimal(10,2) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`percentage_change_id`)
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.manufacturing_quantum_indices_of_manufacturing_production
CREATE TABLE IF NOT EXISTS `manufacturing_quantum_indices_of_manufacturing_production` (
  `quantum_indice_id` int(11) NOT NULL AUTO_INCREMENT,
  `commodity` varchar(200) NOT NULL,
  `quantum_indice` decimal(10,2) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`quantum_indice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.money_and_banking_commercial_banks_bills_loans_advances
CREATE TABLE IF NOT EXISTS `money_and_banking_commercial_banks_bills_loans_advances` (
  `bills_loans_advances_id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` varchar(100) NOT NULL,
  `sub_sector` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `month_id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`bills_loans_advances_id`),
  KEY `money_and_banking_co_month_id_b843ae95_fk_health_mo` (`month_id`),
  CONSTRAINT `money_and_banking_co_month_id_b843ae95_fk_health_mo` FOREIGN KEY (`month_id`) REFERENCES `health_months` (`month_id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.money_and_banking_index
CREATE TABLE IF NOT EXISTS `money_and_banking_index` (
  `institution_id` int(11) NOT NULL AUTO_INCREMENT,
  `financial_institution` varchar(100) NOT NULL,
  PRIMARY KEY (`institution_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.money_and_banking_inflation_rates
CREATE TABLE IF NOT EXISTS `money_and_banking_inflation_rates` (
  `inflation_rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `inflation_rate` decimal(10,2) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`inflation_rate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.money_and_banking_institutions
CREATE TABLE IF NOT EXISTS `money_and_banking_institutions` (
  `moneybanking_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `subcounty_id` int(11) NOT NULL,
  `institution_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`moneybanking_id`),
  KEY `money_and_banking_in_county_id_ee1d8daf_fk_health_co` (`county_id`),
  KEY `money_and_banking_in_institution_id_98d1bbe6_fk_money_and` (`institution_id`),
  CONSTRAINT `money_and_banking_in_county_id_ee1d8daf_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`),
  CONSTRAINT `money_and_banking_in_institution_id_98d1bbe6_fk_money_and` FOREIGN KEY (`institution_id`) REFERENCES `money_and_banking_index` (`institution_id`)
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.money_and_banking_interest_rates
CREATE TABLE IF NOT EXISTS `money_and_banking_interest_rates` (
  `interest_rates_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_loans_and_advances_weighted_average_rates` decimal(10,2) NOT NULL,
  `average_deposit_rate` decimal(10,2) NOT NULL,
  `month_id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`interest_rates_id`),
  KEY `money_and_banking_in_month_id_db7e7e79_fk_health_mo` (`month_id`),
  CONSTRAINT `money_and_banking_in_month_id_db7e7e79_fk_health_mo` FOREIGN KEY (`month_id`) REFERENCES `health_months` (`month_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.money_and_banking_monetary_indicators_broad_money_supply
CREATE TABLE IF NOT EXISTS `money_and_banking_monetary_indicators_broad_money_supply` (
  `broad_money_supply_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` year(4) NOT NULL,
  `broad_money_supply` int(11) NOT NULL,
  PRIMARY KEY (`broad_money_supply_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.money_and_banking_monetary_indicators_domestic_credit
CREATE TABLE IF NOT EXISTS `money_and_banking_monetary_indicators_domestic_credit` (
  `domestic_credit_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `private_and_other_public_bodies` int(11) NOT NULL,
  `national_government` int(11) NOT NULL,
  `total` year(4) NOT NULL,
  PRIMARY KEY (`domestic_credit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.money_and_banking_nairobi_securities_exchange
CREATE TABLE IF NOT EXISTS `money_and_banking_nairobi_securities_exchange` (
  `nse_id` int(11) NOT NULL AUTO_INCREMENT,
  `month_id` int(11) NOT NULL,
  `nse_20_share_index` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`nse_id`),
  KEY `money_and_banking_na_month_id_81bd3f91_fk_health_mo` (`month_id`),
  CONSTRAINT `money_and_banking_na_month_id_81bd3f91_fk_health_mo` FOREIGN KEY (`month_id`) REFERENCES `health_months` (`month_id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.news_updates
CREATE TABLE IF NOT EXISTS `news_updates` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `news` varchar(2000) NOT NULL,
  `source` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.nutrition_kihibs_children_by_breastfeeding_status
CREATE TABLE IF NOT EXISTS `nutrition_kihibs_children_by_breastfeeding_status` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `ever_breastfed` decimal(10,1) NOT NULL,
  `no_of_children` int(11) NOT NULL,
  `one_hour` decimal(10,1) NOT NULL,
  `one_day` decimal(10,1) NOT NULL,
  `ch_breastfed` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `Nutrition_kihibs_chi_county_id_2e526ff8_fk_health_co` (`county_id`),
  CONSTRAINT `Nutrition_kihibs_chi_county_id_2e526ff8_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.nutrition_kihibs_children_by_first_food_supplement
CREATE TABLE IF NOT EXISTS `nutrition_kihibs_children_by_first_food_supplement` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `other_milk` decimal(10,1) NOT NULL,
  `infant_food` decimal(10,1) NOT NULL,
  `porridge` decimal(10,1) NOT NULL,
  `fort_porridge` decimal(10,1) NOT NULL,
  `semi_solids` decimal(10,1) NOT NULL,
  `water` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `no_of_children` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `Nutrition_kihibs_chi_county_id_6a859d35_fk_health_co` (`county_id`),
  CONSTRAINT `Nutrition_kihibs_chi_county_id_6a859d35_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.nutrition_kihibs_children_in_community_nutrition_programmes
CREATE TABLE IF NOT EXISTS `nutrition_kihibs_children_in_community_nutrition_programmes` (
  `participation_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `participated` decimal(10,1) NOT NULL,
  `not_participated` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `no_of_children` int(11) NOT NULL,
  PRIMARY KEY (`participation_id`),
  KEY `Nutrition_kihibs_chi_county_id_96b14e46_fk_health_co` (`county_id`),
  CONSTRAINT `Nutrition_kihibs_chi_county_id_96b14e46_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.nutrition_kihibs_children_in_growth_monitoring_programmes
CREATE TABLE IF NOT EXISTS `nutrition_kihibs_children_in_growth_monitoring_programmes` (
  `participation_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `participated` decimal(10,1) NOT NULL,
  `not_participated` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `no_of_children` int(11) NOT NULL,
  PRIMARY KEY (`participation_id`),
  KEY `Nutrition_kihibs_chi_county_id_20c820a4_fk_health_co` (`county_id`),
  CONSTRAINT `Nutrition_kihibs_chi_county_id_20c820a4_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.nutrition_kihibs_dutation_of_breastfeeding
CREATE TABLE IF NOT EXISTS `nutrition_kihibs_dutation_of_breastfeeding` (
  `duration_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `breastfeeding` decimal(10,1) NOT NULL,
  `mean` decimal(10,1) NOT NULL,
  `median` int(11) NOT NULL,
  `no_of_children` int(11) NOT NULL,
  PRIMARY KEY (`duration_id`),
  KEY `Nutrition_kihibs_dut_county_id_51da16bf_fk_health_co` (`county_id`),
  CONSTRAINT `Nutrition_kihibs_dut_county_id_51da16bf_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.nutrition_kihibs_undernourished_children
CREATE TABLE IF NOT EXISTS `nutrition_kihibs_undernourished_children` (
  `proportion_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `height_for_age` decimal(10,1) NOT NULL,
  `weight_for_age` decimal(10,1) NOT NULL,
  `weight_for_height` decimal(10,1) NOT NULL,
  `no_of_children` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`proportion_id`),
  KEY `Nutrition_kihibs_und_county_id_caa63efa_fk_health_co` (`county_id`),
  CONSTRAINT `Nutrition_kihibs_und_county_id_caa63efa_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.political_units
CREATE TABLE IF NOT EXISTS `political_units` (
  `political_unit_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `subcounty_id` int(11) NOT NULL,
  `county_ward` int(11) NOT NULL,
  PRIMARY KEY (`political_unit_id`),
  KEY `political_units_county_id_576b2409_fk_health_counties_county_id` (`county_id`),
  CONSTRAINT `political_units_county_id_576b2409_fk_health_counties_county_id` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=287 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.population_by_sex_and_age_groups
CREATE TABLE IF NOT EXISTS `population_by_sex_and_age_groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `female` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `total_population` int(11) NOT NULL,
  `age_group` varchar(100) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.population_by_sex_and_school_attendance
CREATE TABLE IF NOT EXISTS `population_by_sex_and_school_attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `education_level` varchar(100) NOT NULL,
  `female` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `total_population` int(11) NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.population_by_type_of_disability
CREATE TABLE IF NOT EXISTS `population_by_type_of_disability` (
  `disability_id` int(11) NOT NULL AUTO_INCREMENT,
  `disability` int(11) NOT NULL,
  `females` int(11) NOT NULL,
  `males` int(11) NOT NULL,
  `total_population` int(11) NOT NULL,
  PRIMARY KEY (`disability_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.population_distribution_sex_number_households_area_density
CREATE TABLE IF NOT EXISTS `population_distribution_sex_number_households_area_density` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `area_in_square_km` decimal(30,2) NOT NULL,
  `county_name` varchar(100) NOT NULL,
  `density` decimal(30,7) NOT NULL,
  `female` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `no_of_houseHolds` int(11) NOT NULL,
  `total_population` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `population_distribut_county_id_c26519d2_fk_health_co` (`county_id`),
  CONSTRAINT `population_distribut_county_id_c26519d2_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.population_households_by_main_source_of_water
CREATE TABLE IF NOT EXISTS `population_households_by_main_source_of_water` (
  `source_of_water_id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`source_of_water_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.population_households_type_floor_material_main_dwelling_unit
CREATE TABLE IF NOT EXISTS `population_households_type_floor_material_main_dwelling_unit` (
  `floor_material_id` int(11) NOT NULL AUTO_INCREMENT,
  `material` varchar(100) NOT NULL,
  `households` int(11) NOT NULL,
  PRIMARY KEY (`floor_material_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.population_kihibs_by_broad_age_group
CREATE TABLE IF NOT EXISTS `population_kihibs_by_broad_age_group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `range_0_14` decimal(10,1) NOT NULL,
  `range_15_64` decimal(10,1) NOT NULL,
  `over_65` decimal(10,1) NOT NULL,
  `not_stated` decimal(10,1) NOT NULL,
  `age_depend_ratio` decimal(10,1) NOT NULL,
  `child_depend_ratio` decimal(10,1) NOT NULL,
  `old_age_depend_ratio` decimal(10,1) NOT NULL,
  `individuals` int(11) NOT NULL,
  PRIMARY KEY (`group_id`),
  KEY `population_kihibs_by_county_id_5f63b7c1_fk_health_co` (`county_id`),
  CONSTRAINT `population_kihibs_by_county_id_5f63b7c1_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.population_kihibs_children_under_18_by_orphanhood
CREATE TABLE IF NOT EXISTS `population_kihibs_children_under_18_by_orphanhood` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `living_with_both` decimal(10,1) NOT NULL,
  `father_alive` decimal(10,1) NOT NULL,
  `father_deceased` decimal(10,1) NOT NULL,
  `mother_alive` decimal(10,1) NOT NULL,
  `mother_deceased` decimal(10,1) NOT NULL,
  `both_alive` decimal(10,1) NOT NULL,
  `only_father_alive` decimal(10,1) NOT NULL,
  `only_mother_alive` decimal(10,1) NOT NULL,
  `both_parents_deceased` decimal(10,1) NOT NULL,
  `missing_info` decimal(10,1) NOT NULL,
  `orphanhood` decimal(10,1) NOT NULL,
  `individuals` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `population_kihibs_ch_county_id_7882414e_fk_health_co` (`county_id`),
  CONSTRAINT `population_kihibs_ch_county_id_7882414e_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.population_kihibs_distribution_by_sex
CREATE TABLE IF NOT EXISTS `population_kihibs_distribution_by_sex` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `male_individuals` int(11) NOT NULL,
  `male_per_cent` decimal(10,1) NOT NULL,
  `female_individuals` int(11) NOT NULL,
  `female_per_cent` decimal(10,1) NOT NULL,
  `sex_ratio` decimal(10,1) NOT NULL,
  `individuals` int(11) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `population_kihibs_di_county_id_d8b7e303_fk_health_co` (`county_id`),
  CONSTRAINT `population_kihibs_di_county_id_d8b7e303_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.population_kihibs_distribution_of_households_by_size
CREATE TABLE IF NOT EXISTS `population_kihibs_distribution_of_households_by_size` (
  `distribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `range_1_2_persons` decimal(10,1) NOT NULL,
  `range_3_4_persons` decimal(10,1) NOT NULL,
  `range_5_6_persons` decimal(10,1) NOT NULL,
  `over_7_persons` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  `mean_hhold_size` decimal(10,1) NOT NULL,
  PRIMARY KEY (`distribution_id`),
  KEY `population_kihibs_di_county_id_ff0f5a6b_fk_health_co` (`county_id`),
  CONSTRAINT `population_kihibs_di_county_id_ff0f5a6b_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.population_kihibs_hholds_by_sex_of_household_head
CREATE TABLE IF NOT EXISTS `population_kihibs_hholds_by_sex_of_household_head` (
  `head_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `male` decimal(10,1) NOT NULL,
  `female` decimal(10,1) NOT NULL,
  `households` int(11) NOT NULL,
  PRIMARY KEY (`head_id`),
  KEY `population_kihibs_hh_county_id_9b2e71c3_fk_health_co` (`county_id`),
  CONSTRAINT `population_kihibs_hh_county_id_9b2e71c3_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.population_kihibs_marital_status_above_18_years
CREATE TABLE IF NOT EXISTS `population_kihibs_marital_status_above_18_years` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `monogamous` decimal(10,1) NOT NULL,
  `polygamous` decimal(10,1) NOT NULL,
  `living_together` decimal(10,1) NOT NULL,
  `seperated` decimal(10,1) NOT NULL,
  `divorced` decimal(10,1) NOT NULL,
  `widow_widower` decimal(10,1) NOT NULL,
  `never_married` decimal(10,1) NOT NULL,
  `individuals` int(11) NOT NULL,
  PRIMARY KEY (`status_id`),
  KEY `population_kihibs_ma_county_id_be0642b5_fk_health_co` (`county_id`),
  CONSTRAINT `population_kihibs_ma_county_id_be0642b5_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.population_percentage_households_ownership_household_assets
CREATE TABLE IF NOT EXISTS `population_percentage_households_ownership_household_assets` (
  `ownership_id` int(11) NOT NULL AUTO_INCREMENT,
  `asset` varchar(100) NOT NULL,
  `percentage` decimal(30,5) NOT NULL,
  PRIMARY KEY (`ownership_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.population_populationbysexhouseholdsdensityandcensusyears
CREATE TABLE IF NOT EXISTS `population_populationbysexhouseholdsdensityandcensusyears` (
  `census_population_id` int(11) NOT NULL AUTO_INCREMENT,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `hhs` int(11) NOT NULL,
  `av_hh_size` int(11) NOT NULL,
  `approx_area` decimal(65,2) NOT NULL,
  `density` int(11) NOT NULL,
  `census_year` int(11) NOT NULL,
  PRIMARY KEY (`census_population_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.population_populationprojectionsbyselectedagegroup
CREATE TABLE IF NOT EXISTS `population_populationprojectionsbyselectedagegroup` (
  `population_projection_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `range_0_4` int(11) NOT NULL,
  `range_5_9` int(11) NOT NULL,
  `range_10_14` int(11) NOT NULL,
  `range_15_19` int(11) NOT NULL,
  `range_20_24` int(11) NOT NULL,
  `range_25_29` int(11) NOT NULL,
  `range_30_34` int(11) NOT NULL,
  `range_35_39` int(11) NOT NULL,
  `range_40_44` int(11) NOT NULL,
  `range_45_49` int(11) NOT NULL,
  `range_50_54` int(11) NOT NULL,
  `range_55_59` int(11) NOT NULL,
  `range_60_64` int(11) NOT NULL,
  `range_65_69` int(11) NOT NULL,
  `range_70_74` int(11) NOT NULL,
  `range_75_79` int(11) NOT NULL,
  `range_80_plus` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`population_projection_id`),
  KEY `population_populatio_county_id_7057bd76_fk_health_co` (`county_id`),
  CONSTRAINT `population_populatio_county_id_7057bd76_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=429 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.population_populationprojectionsbyspecialagegroups
CREATE TABLE IF NOT EXISTS `population_populationprojectionsbyspecialagegroups` (
  `selected_age_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `under_1` int(11) NOT NULL,
  `range_1_2` int(11) NOT NULL,
  `range_3_5` int(11) NOT NULL,
  `range_6_13` int(11) NOT NULL,
  `range_14_17` int(11) NOT NULL,
  `range_18_24` int(11) NOT NULL,
  `range_18_34` int(11) NOT NULL,
  `range_less_18` int(11) NOT NULL,
  `range_18_plus` int(11) NOT NULL,
  `range_15_49` int(11) NOT NULL,
  `range_15_64` int(11) NOT NULL,
  `range_65_plus` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`selected_age_group_id`),
  KEY `population_populatio_county_id_083b63cc_fk_health_co` (`county_id`),
  CONSTRAINT `population_populatio_county_id_083b63cc_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.poverty_consumption_expenditure_and_quintile_distribution
CREATE TABLE IF NOT EXISTS `poverty_consumption_expenditure_and_quintile_distribution` (
  `poverty_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `mean` int(11) NOT NULL,
  `median` int(11) NOT NULL,
  `quarter1` decimal(10,2) NOT NULL,
  `quarter2` decimal(10,2) NOT NULL,
  `quarter3` decimal(10,2) NOT NULL,
  `quarter4` decimal(10,2) NOT NULL,
  `quarter5` decimal(10,2) NOT NULL,
  PRIMARY KEY (`poverty_id`),
  KEY `Poverty_consumption__county_id_1e000c0b_fk_health_co` (`county_id`),
  CONSTRAINT `Poverty_consumption__county_id_1e000c0b_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.poverty_distribution_of_households_by_pointofpurchasedfooditems
CREATE TABLE IF NOT EXISTS `poverty_distribution_of_households_by_pointofpurchasedfooditems` (
  `poverty_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `supermarket` decimal(10,2) NOT NULL,
  `open_market` decimal(10,2) NOT NULL,
  `kiosk` decimal(10,2) NOT NULL,
  `general_shop` decimal(10,2) NOT NULL,
  `specialised_shop` decimal(10,2) NOT NULL,
  `informal_sources` decimal(10,2) NOT NULL,
  `other_formal_points` decimal(10,2) NOT NULL,
  `number_of_observations` int(11) NOT NULL,
  PRIMARY KEY (`poverty_id`),
  KEY `Poverty_distribution_county_id_35fb5e54_fk_health_co` (`county_id`),
  CONSTRAINT `Poverty_distribution_county_id_35fb5e54_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.poverty_distribution_of_household_food_consumption
CREATE TABLE IF NOT EXISTS `poverty_distribution_of_household_food_consumption` (
  `poverty_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `purchases` decimal(10,2) NOT NULL,
  `stock` decimal(10,2) NOT NULL,
  `own_production` decimal(10,2) NOT NULL,
  `gifts` decimal(10,2) NOT NULL,
  PRIMARY KEY (`poverty_id`),
  KEY `Poverty_distribution_county_id_d2b9debc_fk_health_co` (`county_id`),
  CONSTRAINT `Poverty_distribution_county_id_d2b9debc_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.poverty_food_and_non_food_expenditure_per_adult_equivalent
CREATE TABLE IF NOT EXISTS `poverty_food_and_non_food_expenditure_per_adult_equivalent` (
  `poverty_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `food` decimal(10,2) NOT NULL,
  `non_food` decimal(10,2) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`poverty_id`),
  KEY `Poverty_food_and_non_county_id_b5c22bbd_fk_health_co` (`county_id`),
  CONSTRAINT `Poverty_food_and_non_county_id_b5c22bbd_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.poverty_food_estimates_by_residence_and_county
CREATE TABLE IF NOT EXISTS `poverty_food_estimates_by_residence_and_county` (
  `poverty_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `headcount_rate` decimal(10,1) NOT NULL,
  `distribution_of_the_poor` decimal(10,1) NOT NULL,
  `poverty_gap` decimal(10,1) NOT NULL,
  `severity_of_poverty` decimal(10,1) NOT NULL,
  `population` int(11) NOT NULL,
  `number_of_poor` int(11) NOT NULL,
  PRIMARY KEY (`poverty_id`),
  KEY `Poverty_food_estimat_county_id_69bb7df1_fk_health_co` (`county_id`),
  CONSTRAINT `Poverty_food_estimat_county_id_69bb7df1_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.poverty_hardcore_estimates_by_residence_and_county
CREATE TABLE IF NOT EXISTS `poverty_hardcore_estimates_by_residence_and_county` (
  `poverty_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `headcount_rate` decimal(10,1) NOT NULL,
  `distribution_of_the_poor` decimal(10,1) NOT NULL,
  `poverty_gap` decimal(10,1) NOT NULL,
  `severity_of_poverty` decimal(10,1) NOT NULL,
  `population` int(11) NOT NULL,
  `number_of_poor` int(11) NOT NULL,
  PRIMARY KEY (`poverty_id`),
  KEY `Poverty_hardcore_est_county_id_ac08caa9_fk_health_co` (`county_id`),
  CONSTRAINT `Poverty_hardcore_est_county_id_ac08caa9_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.poverty_overall_estimates_by_residence_and_county
CREATE TABLE IF NOT EXISTS `poverty_overall_estimates_by_residence_and_county` (
  `poverty_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `headcount_rate` decimal(10,1) NOT NULL,
  `distribution_of_the_poor` decimal(10,1) NOT NULL,
  `poverty_gap` decimal(10,1) NOT NULL,
  `severity_of_poverty` decimal(10,1) NOT NULL,
  `population` int(11) NOT NULL,
  `number_of_poor` int(11) NOT NULL,
  PRIMARY KEY (`poverty_id`),
  KEY `Poverty_overall_esti_county_id_2558dd88_fk_health_co` (`county_id`),
  CONSTRAINT `Poverty_overall_esti_county_id_2558dd88_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.tourism_arrivals
CREATE TABLE IF NOT EXISTS `tourism_arrivals` (
  `arrivals_id` int(11) NOT NULL AUTO_INCREMENT,
  `quarter` varchar(100) NOT NULL,
  `holiday` decimal(15,2) NOT NULL,
  `business` decimal(15,2) NOT NULL,
  `transit` decimal(15,2) NOT NULL,
  `other` decimal(15,2) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`arrivals_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.tourism_conferences
CREATE TABLE IF NOT EXISTS `tourism_conferences` (
  `conference_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `number_of_conferences` decimal(15,2) NOT NULL,
  `number_of_delegates` decimal(15,2) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`conference_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.tourism_departures
CREATE TABLE IF NOT EXISTS `tourism_departures` (
  `departures_id` int(11) NOT NULL AUTO_INCREMENT,
  `quarter` varchar(100) NOT NULL,
  `holiday` decimal(15,2) NOT NULL,
  `business` decimal(15,2) NOT NULL,
  `transit` decimal(15,2) NOT NULL,
  `other` decimal(15,2) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`departures_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.tourism_earnings
CREATE TABLE IF NOT EXISTS `tourism_earnings` (
  `earnings_id` int(11) NOT NULL AUTO_INCREMENT,
  `tourism_earnings_billions` decimal(15,2) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`earnings_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.tourism_hotel_occupancy_by_residence
CREATE TABLE IF NOT EXISTS `tourism_hotel_occupancy_by_residence` (
  `hotel_occupancy_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` year(4) NOT NULL,
  `permanent_occupants` decimal(30,3) NOT NULL,
  `germany` decimal(30,3) NOT NULL,
  `switzerland` decimal(30,3) NOT NULL,
  `united_kingdom` decimal(30,3) NOT NULL,
  `italy` decimal(30,3) NOT NULL,
  `france` decimal(30,3) NOT NULL,
  `scandinavia` decimal(30,3) NOT NULL,
  `other_europe` decimal(30,3) NOT NULL,
  `europe` decimal(30,3) NOT NULL,
  `kenya_residents` decimal(30,3) NOT NULL,
  `uganda` decimal(30,3) NOT NULL,
  `tanzania` decimal(30,3) NOT NULL,
  `east_and_central_africa` decimal(30,3) NOT NULL,
  `west_africa` decimal(30,3) NOT NULL,
  `north_africa` decimal(30,3) NOT NULL,
  `south_africa` decimal(30,3) NOT NULL,
  `other_africa` decimal(30,3) NOT NULL,
  `africa` decimal(30,3) NOT NULL,
  `usa` decimal(30,3) NOT NULL,
  `canada` decimal(30,3) NOT NULL,
  `other_america` decimal(30,3) NOT NULL,
  `america` decimal(30,3) NOT NULL,
  `japan` decimal(30,3) NOT NULL,
  `india` decimal(30,3) NOT NULL,
  `middle_east` decimal(30,3) NOT NULL,
  `other_asia` decimal(30,3) NOT NULL,
  `asia` decimal(30,3) NOT NULL,
  `australia_and_new_zealand` decimal(30,3) NOT NULL,
  `all_other_countries` decimal(30,3) NOT NULL,
  `total_occupied` decimal(30,3) NOT NULL,
  `total_available` decimal(30,3) NOT NULL,
  `occupancy_percentage_rate` decimal(30,10) NOT NULL,
  PRIMARY KEY (`hotel_occupancy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.tourism_hotel_occupancy_by_zone
CREATE TABLE IF NOT EXISTS `tourism_hotel_occupancy_by_zone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` year(4) NOT NULL,
  `coastal_beach` decimal(30,3) NOT NULL,
  `coastal_other` decimal(30,3) NOT NULL,
  `coastal_hinterland` decimal(30,3) NOT NULL,
  `nairobi_high_class` decimal(30,3) NOT NULL,
  `nairobi_other` decimal(30,3) NOT NULL,
  `central` decimal(30,3) NOT NULL,
  `masailand` decimal(30,3) NOT NULL,
  `nyanza_basin` decimal(30,3) NOT NULL,
  `western` decimal(30,3) NOT NULL,
  `northern` decimal(30,3) NOT NULL,
  `total_occupied` decimal(30,3) NOT NULL,
  `total_available` decimal(30,3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.tourism_population_proportion_that_took_trip
CREATE TABLE IF NOT EXISTS `tourism_population_proportion_that_took_trip` (
  `population_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `proportion` decimal(10,1) NOT NULL,
  `no_of_individuals` int(11) NOT NULL,
  PRIMARY KEY (`population_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.tourism_visitors_to_museums
CREATE TABLE IF NOT EXISTS `tourism_visitors_to_museums` (
  `visitor_museums_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` year(4) NOT NULL,
  `nairobi_snake_park` decimal(30,3) NOT NULL,
  `fort_jesus` decimal(30,3) NOT NULL,
  `kisumu` decimal(30,3) NOT NULL,
  `kitale` decimal(30,3) NOT NULL,
  `gede` decimal(30,3) NOT NULL,
  `meru` decimal(30,3) NOT NULL,
  `lamu` decimal(30,3) NOT NULL,
  `jumba_la_mtwana` decimal(30,3) NOT NULL,
  `kariandusi` decimal(30,3) NOT NULL,
  `hyrax_hill` decimal(30,3) NOT NULL,
  `karen_blixen` decimal(30,3) NOT NULL,
  `malindi` decimal(30,3) NOT NULL,
  `kilifi_mnarani` decimal(30,3) NOT NULL,
  `kabarnet` decimal(30,3) NOT NULL,
  `kapenguria` decimal(30,3) NOT NULL,
  `swahili_house` decimal(30,3) NOT NULL,
  `narok` decimal(30,3) NOT NULL,
  `german_post` decimal(30,3) NOT NULL,
  `takwa_ruins` decimal(30,3) NOT NULL,
  PRIMARY KEY (`visitor_museums_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.tourism_visitor_to_parks
CREATE TABLE IF NOT EXISTS `tourism_visitor_to_parks` (
  `visitor_parks_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` year(4) NOT NULL,
  `nairobi` decimal(30,3) NOT NULL,
  `nairobi_safari_walk` decimal(30,3) NOT NULL,
  `nairobi_mini_orphanage` decimal(30,3) NOT NULL,
  `amboseli` decimal(30,3) NOT NULL,
  `tsavo_west` decimal(30,3) NOT NULL,
  `tsavo_east` decimal(30,3) NOT NULL,
  `aberdare` decimal(30,3) NOT NULL,
  `lake_nakuru` decimal(30,3) NOT NULL,
  `masai_mara` decimal(30,3) NOT NULL,
  `hallers_park` decimal(30,3) NOT NULL,
  `malindi_marine` decimal(30,3) NOT NULL,
  `lake_bogoria` decimal(30,3) NOT NULL,
  `meru` decimal(30,3) NOT NULL,
  `shimba_hills` decimal(30,3) NOT NULL,
  `mt_kenya` decimal(30,3) NOT NULL,
  `samburu` decimal(30,3) NOT NULL,
  `kisite_mpunguti` decimal(30,3) NOT NULL,
  `mombasa_marine` decimal(30,3) NOT NULL,
  `watamu_marine` decimal(30,3) NOT NULL,
  `hells_gate` decimal(30,3) NOT NULL,
  `impala_sanctuary_kisumu` decimal(30,3) NOT NULL,
  `mt_longonot` decimal(30,3) NOT NULL,
  `other` decimal(30,3) NOT NULL,
  PRIMARY KEY (`visitor_parks_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.trade_and_commerce_balance_of_trade
CREATE TABLE IF NOT EXISTS `trade_and_commerce_balance_of_trade` (
  `trade_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  `amount_in_millions` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`trade_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.trade_and_commerce_import_trade_africa_countries
CREATE TABLE IF NOT EXISTS `trade_and_commerce_import_trade_africa_countries` (
  `import_id` int(11) NOT NULL AUTO_INCREMENT,
  `zones` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `values` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`import_id`)
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.trade_and_commerce_quantities_principal_domestic_exports
CREATE TABLE IF NOT EXISTS `trade_and_commerce_quantities_principal_domestic_exports` (
  `trade_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`trade_id`)
) ENGINE=InnoDB AUTO_INCREMENT=211 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.trade_and_commerce_quantities_principal_imports
CREATE TABLE IF NOT EXISTS `trade_and_commerce_quantities_principal_imports` (
  `trade_id` int(11) NOT NULL AUTO_INCREMENT,
  `commodity` varchar(100) NOT NULL,
  `unit_of_quantity` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`trade_id`)
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.trade_and_commerce_revenue_collection_by_amount
CREATE TABLE IF NOT EXISTS `trade_and_commerce_revenue_collection_by_amount` (
  `tradeandcommerce_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `revenuecollection_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`tradeandcommerce_id`),
  KEY `trade_and_commerce_r_county_id_a2a03cd8_fk_health_co` (`county_id`),
  KEY `trade_and_commerce_r_revenuecollection_id_d8fe318d_fk_trade_and` (`revenuecollection_id`),
  CONSTRAINT `trade_and_commerce_r_county_id_a2a03cd8_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`),
  CONSTRAINT `trade_and_commerce_r_revenuecollection_id_d8fe318d_fk_trade_and` FOREIGN KEY (`revenuecollection_id`) REFERENCES `trade_and_commerce_revenue_collection_by_id` (`revenuecollection_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.trade_and_commerce_revenue_collection_by_id
CREATE TABLE IF NOT EXISTS `trade_and_commerce_revenue_collection_by_id` (
  `revenuecollection_id` int(11) NOT NULL AUTO_INCREMENT,
  `revenuecollection_title` varchar(100) NOT NULL,
  PRIMARY KEY (`revenuecollection_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.trade_and_commerce_trading_centres
CREATE TABLE IF NOT EXISTS `trade_and_commerce_trading_centres` (
  `tradeandcommerce_centre_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `trading_centre_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`tradeandcommerce_centre_id`),
  KEY `trade_and_commerce_t_county_id_645eaf2d_fk_health_co` (`county_id`),
  KEY `trade_and_commerce_t_trading_centre_id_bb1782c4_fk_trade_and` (`trading_centre_id`),
  CONSTRAINT `trade_and_commerce_t_county_id_645eaf2d_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`),
  CONSTRAINT `trade_and_commerce_t_trading_centre_id_bb1782c4_fk_trade_and` FOREIGN KEY (`trading_centre_id`) REFERENCES `trade_and_commerce_trading_centres_ids` (`trading_centre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=437 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.trade_and_commerce_trading_centres_ids
CREATE TABLE IF NOT EXISTS `trade_and_commerce_trading_centres_ids` (
  `trading_centre_id` int(11) NOT NULL AUTO_INCREMENT,
  `trading_centre` varchar(100) NOT NULL,
  PRIMARY KEY (`trading_centre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.trade_and_commerce_values_of_principal_domestic_exports
CREATE TABLE IF NOT EXISTS `trade_and_commerce_values_of_principal_domestic_exports` (
  `trade_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  `values` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`trade_id`)
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.trade_and_commerce_values_of_principal_imports
CREATE TABLE IF NOT EXISTS `trade_and_commerce_values_of_principal_imports` (
  `trade_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`trade_id`)
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.trade_and_commerce_value_of_total_exports_all_destinations
CREATE TABLE IF NOT EXISTS `trade_and_commerce_value_of_total_exports_all_destinations` (
  `export_id` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `value_in_millions` decimal(65,2) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`export_id`)
) ENGINE=InnoDB AUTO_INCREMENT=307 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.trade_and_commerce_value_of_total_exports_european_union
CREATE TABLE IF NOT EXISTS `trade_and_commerce_value_of_total_exports_european_union` (
  `export_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(100) NOT NULL,
  `value_in_millions` decimal(65,2) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`export_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.trade_and_commerce_value_total_exports_east_africa_communities
CREATE TABLE IF NOT EXISTS `trade_and_commerce_value_total_exports_east_africa_communities` (
  `export_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(100) NOT NULL,
  `value_in_millions` decimal(65,2) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`export_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.transport_and_communication_coverage_of_postal_services
CREATE TABLE IF NOT EXISTS `transport_and_communication_coverage_of_postal_services` (
  `postal_coverage_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `postal_service_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`postal_coverage_id`),
  KEY `transport_and_commun_county_id_53ffa585_fk_health_co` (`county_id`),
  KEY `transport_and_commun_postal_service_id_9cc0f418_fk_transport` (`postal_service_id`),
  CONSTRAINT `transport_and_commun_county_id_53ffa585_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`),
  CONSTRAINT `transport_and_commun_postal_service_id_9cc0f418_fk_transport` FOREIGN KEY (`postal_service_id`) REFERENCES `transport_and_communication_coverage_of_postal_services_ids` (`postal_service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=211 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.transport_and_communication_coverage_of_postal_services_ids
CREATE TABLE IF NOT EXISTS `transport_and_communication_coverage_of_postal_services_ids` (
  `postal_service_id` int(11) NOT NULL AUTO_INCREMENT,
  `postal_service` varchar(100) NOT NULL,
  PRIMARY KEY (`postal_service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.transport_and_communication_coverage_of_telephone_services
CREATE TABLE IF NOT EXISTS `transport_and_communication_coverage_of_telephone_services` (
  `telephone_coverage_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `telephone_service_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`telephone_coverage_id`),
  KEY `transport_and_commun_county_id_e7ccd8e7_fk_health_co` (`county_id`),
  KEY `transport_and_commun_telephone_service_id_0a52aec5_fk_transport` (`telephone_service_id`),
  CONSTRAINT `transport_and_commun_county_id_e7ccd8e7_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`),
  CONSTRAINT `transport_and_commun_telephone_service_id_0a52aec5_fk_transport` FOREIGN KEY (`telephone_service_id`) REFERENCES `transport_and_communication_coverage_of_telephone_services_ids` (`telephone_service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.transport_and_communication_coverage_of_telephone_services_ids
CREATE TABLE IF NOT EXISTS `transport_and_communication_coverage_of_telephone_services_ids` (
  `telephone_service_id` int(11) NOT NULL AUTO_INCREMENT,
  `telephone_service` varchar(100) NOT NULL,
  PRIMARY KEY (`telephone_service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.transport_and_communication_expenditure_on_roads
CREATE TABLE IF NOT EXISTS `transport_and_communication_expenditure_on_roads` (
  `expenditure_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `expenditure` bigint(20) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`expenditure_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.transport_and_communication_road_coverage_by_type_and_distance
CREATE TABLE IF NOT EXISTS `transport_and_communication_road_coverage_by_type_and_distance` (
  `road_coverage_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `road_type_id` int(11) NOT NULL,
  `distance` double NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`road_coverage_id`),
  KEY `transport_and_commun_county_id_31aae0a2_fk_health_co` (`county_id`),
  KEY `transport_and_commun_road_type_id_43bea3e1_fk_transport` (`road_type_id`),
  CONSTRAINT `transport_and_commun_county_id_31aae0a2_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`),
  CONSTRAINT `transport_and_commun_road_type_id_43bea3e1_fk_transport` FOREIGN KEY (`road_type_id`) REFERENCES `transport_and_communication_road_coverage_type_distance_ids` (`road_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.transport_and_communication_road_coverage_type_distance_ids
CREATE TABLE IF NOT EXISTS `transport_and_communication_road_coverage_type_distance_ids` (
  `road_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `road_type` varchar(100) NOT NULL,
  PRIMARY KEY (`road_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.transport_and_communication_status_of_ongoing_roads_programme
CREATE TABLE IF NOT EXISTS `transport_and_communication_status_of_ongoing_roads_programme` (
  `road_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `length` decimal(10,2) NOT NULL,
  `percentage_completion` decimal(10,2) NOT NULL,
  `estimated_project_cost` decimal(10,2) NOT NULL,
  PRIMARY KEY (`road_id`),
  KEY `transport_and_commun_county_id_0c3ed162_fk_health_co` (`county_id`),
  CONSTRAINT `transport_and_commun_county_id_0c3ed162_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.vital_statistics_births_and_deaths_by_sex
CREATE TABLE IF NOT EXISTS `vital_statistics_births_and_deaths_by_sex` (
  `count_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `births` int(11) NOT NULL,
  `deaths` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`count_id`),
  KEY `vital_statistics_bir_county_id_52463b8a_fk_health_co` (`county_id`),
  CONSTRAINT `vital_statistics_bir_county_id_52463b8a_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.vital_statistics_death_causes
CREATE TABLE IF NOT EXISTS `vital_statistics_death_causes` (
  `cause_id` int(11) NOT NULL AUTO_INCREMENT,
  `cause` varchar(100) NOT NULL,
  PRIMARY KEY (`cause_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.vital_statistics_expectedandregisteredbirthsanddeaths
CREATE TABLE IF NOT EXISTS `vital_statistics_expectedandregisteredbirthsanddeaths` (
  `count_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `coverage` varchar(100) NOT NULL,
  `births` decimal(65,2) NOT NULL,
  `deaths` decimal(65,2) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`count_id`),
  KEY `vital_statistics_exp_county_id_71938b21_fk_health_co` (`county_id`),
  CONSTRAINT `vital_statistics_exp_county_id_71938b21_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table knbs_bi.vital_statistics_top_ten_death_causes
CREATE TABLE IF NOT EXISTS `vital_statistics_top_ten_death_causes` (
  `count_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  `cause_id` int(11) NOT NULL,
  `percent` double NOT NULL,
  `total` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`count_id`),
  KEY `vital_statistics_top_cause_id_be88b872_fk_vital_sta` (`cause_id`),
  KEY `vital_statistics_top_county_id_db737182_fk_health_co` (`county_id`),
  CONSTRAINT `vital_statistics_top_cause_id_be88b872_fk_vital_sta` FOREIGN KEY (`cause_id`) REFERENCES `vital_statistics_death_causes` (`cause_id`),
  CONSTRAINT `vital_statistics_top_county_id_db737182_fk_health_co` FOREIGN KEY (`county_id`) REFERENCES `health_counties` (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=364 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
