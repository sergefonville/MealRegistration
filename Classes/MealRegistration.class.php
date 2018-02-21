<?php
	require_once('Meal.class.php');
	require_once('FoodItem.class.php');
	class MealRegistration {
		
		private $databaseConnection;
		
		function __constructor() {
			if(!extension_loaded('sqlite3'))
				die('sqlite3 not loaded!');

			$this->databaseConnection  = new SQLite3();
			$createMealsStatement = "
				CREATE TABLE IF NOT EXISTS meals(
					id INTEGER AUTO_INCREMENT PRIMARY KEY,
					timestamp TEXT
				);
			";
			$createFooditemsStatement = "
				CREATE TABLE IF NOT EXISTS fooditems(
					id INTEGER AUTO_INCREMENT PRIMARY KEY,
					name TEXT,
					unit TEXT,
					unit_amount INTEGER,
					CHECK (unit IN ('Grams','Kcal'))
				);
			";
			$createMealFooditemsStatement = "
				CREATE TABLE IF NOT EXISTS meal_fooditems(
					meal_id INTEGER,
					fooditem_id INTEGER,
					PRIMARY KEY (meal_id, fooditem_id),
					FOREIGN KEY (meal_id) REFERENCES meals(id),
					FOREIGN KEY (fooditem_id) REFERENCES fooditems(id)
				);
			";
			
			$this->databaseConnection->open('mealRegistration.db');
			$this->databaseConnection->exec($createMealsStatement);
			$this->databaseConnection->exec($createFooditemsStatement);
			$this->databaseConnection->exec($createMealFooditemsStatement);
		}
		
		function addMeal($meal) {
			/************************************************************
			 *  A meal is assumed to be structured as follows:          *
			 *  (displayed as JSON for clarity, an object is expected)	*
			 *  {														*
			 *		"timestamp": "yyyy-MM-dd HH:mm",					*
			 *		"fooditems" [										*
			 *	 		{												*
			 *			    "name": String,								*
 			 *			    "unit": String,								*
 			 *			    "amount": Int,								*
 			 *			    "carbs": String,							*
 			 *			    "kcal": Int									*
			 *			},												*
			 *	 		{												*
			 *			    "name": String,								*
 			 *			    "unit": String,								*
 			 *			    "amount": Int,								*
 			 *			    "carbs": String,							*
 			 *			    "kcal": Int									*
			 *			},												*
			 *			...												*
			 * 		]													*
			 *  }														*
			 ************************************************************/
			
		}

		function updateMeal($meal) {

		}

		function getMeal($criteria) {
			/*
             * $criteria is an object that only has a timestamp property in this version
			 * More filtering properties will be added in later versions
			 */
			
		}

		function addFoodItem($foodItem) {
			/************************************************************
			 *  A fooditem is assumed to be structured as follows:      *
			 *  (displayed as JSON for clarity, an object is expected)	*
			 *	{														*
			 *	    "name": String,										*
			 *	    "unit": String,										*
 			 *	    "amount": Int,										*
 			 *	    "carbs": String,									*
 			 *	    "kcal": Int											*
			 *	}														*
			 ************************************************************/
		}

		function updateFoodItem($foodItem) {

		}

		function getFoodItem($criteria) {
			/*
             * $criteria is an object that only has a timestamp property in this version
			 * More filtering properties will be added in later versions
			 */

		}
		
		function __destruct() { 
			$this->databaseConnection->close();
		}
	}
?>