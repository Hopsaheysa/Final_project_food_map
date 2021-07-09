<?php

namespace Database\Seeders;

class DataProvider
{

    public static function getRecipes()
    {

        return [
            [
                'name' => "Kuba",
                'instructions' => "Soak dried mushrooms in water for at least 2 hours, then squeeze them to get rid of extra water. 
            Rinse hulled grain in cold water and cook in salted water until soft, about 20‑30 minutes. Drain and let in the sieve to get rid of water.
            Cut onion in small pieces and fry on lard until brownish, add soaked mushrooms cut in bigger pieces. Stir shortly, then add garlic crushed with salt, caraway, marjoram and freshly ground pepper.
            Butter the casserole, put in hulled grain and mushroom mixture and mix together. Smooth out and bake in preheated oven at 180°C for about 25 minutes until golden-brown colour.",
                'image' => "Kuba.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Czech Republic"],
                'ingredients' => [[3, "piece", "mushrooms"], [300, "g", "hulled grain (barley)"], [4, "tablespoon", "lard"], [2, "whole", "onions"], [2, "cloves", "garlic"], [0.5, "teaspoon", "ground caraway"], [1, "teaspoon", "dried marjoram"], [null, null, "salt"], [null, null, "pepper"]]
            ], [
                'name' => "Fried carp with potato salad",
                'instructions' => "Preferably the day before, boil potatoes in skin for about 15‑20 minutes, depending on their size, check with a knife whether they are soft. Let them cool down, peel and cut into cubes about 1 × 1 cm.
            Peel carrot and celery root and cook them in salted water 10‑15 minutes until tender but not overcooked. Take them out of water, let cool down and cut in small pieces. Prepare hard-boiled eggs, peel and cut in pieces. Defrost green peas (or rinse the sterilized one and drain). 
            Cut ham and pickles in small cubes (leaving the brine for seasoning). Mix all ingredients carefully in a bowl, add mayonnaise and some pickle brine with mixed salt and pepper.
            Salt the carp fillets and dip them in flour, then in egg and milk mixture and finally in breadcrumbs. Fry on all sides in hot oil until golden brown. Add lemon for each serving.",
                'image' => "fried-carp.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Czech Republic"],
                'ingredients' => [[4, "piece", "carp fillets"], [150, "g", "flour"], [6, null, "eggs"], [2, "tablespoon", "milk"], [null, null, "bread crumbs"], [null, null, "fat for frying"], [null, null, "lemon"], [null, null, "salt"], [1, "kg", "potatoes"], [4, null, "carrots"], [250, "g", "celery root"], [1, "jar", "sterilized greem peas"], [200, "g", "ham"], [150, "g", "pickles"], [150, "g", "mayonnaise"], [null, null, "pepper"]]
            ], [
                'name' => "Easter stuffing",
                'instructions' => "Cook the smoked meat in water and let it cool down. Then cut it in cubes.
            Dice the rolls or baguette and put them in a larger bowl. Whisk egg yolks in the milk, season with salt and pepper and add a bit of nutmeg. Pour over the dices of rolls (or baguette) and let soak. Add pieces of meat. Chop the herbs, add in the bowl and mix together. Finally, add egg whites foam. 
            Lard the casserole, sprinkle with bread crumbs and pour in the mixture. Bake in preheated oven at 200°C for about 35‑40 minutes until golden brown.",
                'image' => "easter-stuffing.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Czech Republic"],
                'ingredients' => [[800, "g", "smoked meat"], [1, null, "baguette"], [8, null, "eggs"], [250, "ml", "milk"], [null, null, "salt"], [null, null, "pepper"], [null, null, "nutmeg"], [null, null, "herbs"], [null, null, "lard"], [null, null, "bread crumbs"]]
            ], [
                'name' => "Buchty",
                'instructions' => "Mix the yeast with a bit of sugar and lukewarm milk and put the mixture on a warm place to let the yeast ferment. Melt the butter in the rest of the lukewarm milk.
            Put the flour with a pinch of salt into a bowl, add the remaining sugar, egg yolks, some vanilla grains or a bit of vanilla sugar and some grated lemon zest. Pour in the warm milk with melted butter and the fermented yeast mixture. Knead until having smooth dough, sprinkle with some flour and let rise until doubled in bulk.
            In the meantime, prepare the filling. To make quark filling, beat the quark with sugar and egg yolks until smooth. Soak raisins in rum, sieve and blend in the mixture. To make plum-jam filling, mix the jam with a bit of rum. Making poppy seed filling is the trickiest. Mix ground poppy seed with milk and sugar, cinnamon and vanilla, cook the mixture over low heat and finally add raisins, bit of rum and cocoa for better taste. Let it cool. 
            When the dough is ready, put it on floured pastry board. You can either roll the dough to a thicker layer and divide it to get equal square pieces, or, using a tablespoon, pinch off balls directly from the dough to make flat square pieces. Place a tablespoon of filling onto the centre of each square piece, bend the edges over the filling, press together using your fingers and make a roll. Grease the bun with melted butter and place it into a baking pan, one next to another. Finally, brush some more melted butter over the top of all of them. Bake in a preheated oven at 180°C for about 25-30 minutes, until they take golden-brown colour. Sprinkle with powdered sugar before serving. ",
                'image' => "buchty.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Czech Republic", "Slovakia"],
                'ingredients' => [[1, "package", "fresh yeast"], [250, "g", "milk"], [140, "g", "butter"], [500, "g", "flour"], [null, null, "salt"], [60, "g", "sugar"], [3, null, "egg yolks"], [null, null, "vanilla"], [null, null, "grated lemon zest"], [null, null, "melted butter"], [250, "g", "soft quark"], [100, "g", "powdered sugar"], [2, null, "egg yolks"], [1, "tablespoon", "rasins soaked in rum"]]
            ], [
                'name' => "Svíčková (Beef sirloin with cream sauce)",
                'instructions' => "Clean the meat, get it rid of membranes and lard with bacon. Then sprinkle with salt and pepper. Clean the onion and cut it in small cubes, clean the vegetables and grate it. Put the vegetables in the casserole, place the meat on top, add spices, sprinkle with lemon juice and pour over the melted butter. Cover with a lid and let sit in the fridge overnight.
            The next day baste the meat with some water and stew in the oven, covered with a lid. When tender, take the meat out and let sit. Remove the spices from the sauce, especially bay leaves. 
            Bring the sauce slowly to boil. Add mustard, two tablespoons of flour and stir fry. Pour in the cream and boil gently, mixing from time to time. If the sauce is too thick, dilute it with some milk. Finally sieve through and press softened vegetables in the sauce through a sieve. Season with salt, add some lemon juice or some sugar. To highlight its taste, you can add some caramelized sugar (caramelize one tablespoon of sugar, when it starts melting and turns brown, baste with some water and cook).
            Divide the meat into portions, put it back in the sauce and heat up. Serve with bread dumpling, slice of lemon and cranberry sauce.",
                'image' => "svickova.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Czech Republic"],
                'ingredients' => [[750, "g", "beef sirloin"], [50, "g", "bacon"], [140, "gram", "butter"], [2, "bigger", "carrots"], [150, "g", "celery root"], [null, null, "salt"], [null, null, "pepper"], [1, null, "parsley"], [1, null, "onion"], [5, null, "peppercorns"], [3, null, "allspice balls"], [3, null, "bayleaves"], [1, "pinch", "thyme"], [150, "g", "melted butter"], [1, null, "lemon"], [100, "g", "mustard"], [2, "tablespoons", "flour"], [250, "ml", "whipping cream"], [null, null, "sugar"]]
            ], [
                'name' => "Kyselo (sour and mushroom soup)",
                'instructions' => "Dilute the sourdough with a bit of lukewarm water and let rise for several hours, preferably overnight. Put mushroom and caraway in the pot, add peeled, washed potatoes cut in cubes. Pour in the water, salt and cook until tender. Then add the fermented sourdough mixture and cook. Cut the onion in small pieces and fry on butter or lard, adding it in the soup. Prepare scrambled eggs (the mixture should not be too thick), serving them either directly on the plates or putting them in the soup.",
                'image' => "kyselo.jpg",
                'isVegan' => false,
                'isVegeterian' => true,
                'isLactoseFree' => false,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Czech Republic",],
                'ingredients' => [[120, "g", "sourdough"], [40, "g", "butter"], [70, "g", "mushrooms"], [300, "g", "potatoes"], [1, null, "onion"], [900, "ml", "water"], [200, "ml", "milk"], [2, null, "eggs"], [null, null, "salt"], [null, null, "caraway"]]
            ], [
                'name' => "Tortilla de patatas",
                'instructions' => "For this recipe, I used a 9 inch pan. It's a good size for a nice and thick omelette. And I used a bigger pan to cook the potatoes.
            Peel and slice the potatoes very thin
            Chop the onion, season with salt (and pepper if you want), and cook in a small pan on a low-medium heat until it gets brown, then set it aside.
            While the onion is cooking, preheat a pan with 2 cups of vegetable or canola oil on high heat. Place the potato slices into the pan.
            Season the potatoes with salt and pepper and cook for about 5 to 7 minutes. Do not wait until they look brown, we don’t want french fries! To be sure the potatoes are done, poke them with a wooden spoon and if they fall apart, they are done.
            Once the potatoes are cooked, drain the oil. Mix the potatoes with the onion in the pan and combine them well ( you can skip this step but I love the flavor it gets). Then place the mixture into a bowl.
            Beat 4 eggs, season them with some more salt and pepper, and pour them into the bowl with the onion and potatoes. Mix with a spatula or a wooden spoon.
            Be sure it is juicy! If it looks dry just beat another egg and pour it into the mixture.
            Using one of the pans you used for the potato or onion, pour about 1 tablespoon of olive oil and place on medium-low heat. Once the oil is warm, pour the mixture in. After about a minute, peel back the edges of the omelette from the pan so it doesn’t stick. Shaking the pan also helps to ensure the omelette doesn’t stick.
            In about 4-5 minutes, the bottom of the omelette should be cooked. Position a plate on top of the omelette in the pan, and flip it. The omelette now will be on the plate. Next, slide it back into the pan, with the cooked face of the omelette facing up.
            Cook it for about 3-5 minutes and flip again. Now the omelette should have a consistent texture. Slide it back into the pan for another 30 seconds and flip it again. I always flip the omelette 5-6 times. My grandmother told me that the more you flip it, the better!",
                'image' => "tortilla-de-patatas.jpg",
                'isVegan' => false,
                'isVegeterian' => true,
                'isLactoseFree' => true,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Spain"],
                'ingredients' => [[3, null, "potatoes"], [1, null, "onion"], [4, null, "eggs"], [500, "ml", "oil"], [null, null, "salt"], [null, null, "black pepper"]]
            ], [
                'name' => "Authentic Paella Valenciana",
                'instructions' => "Heat a paella pan over medium-high heat, and coat with olive oil. Add the chicken, rabbit and garlic; cook and stir until nicely browned. Move the browned meat to the sides of the pan, and add the tomato, butter beans, peas, and green beans. Season with paprika, and mix well.
            Fill the paella pan almost to the top with water, measuring the water as you put it in. This is to help you to determine how much rice to add, as paella pans come in different sizes. Bring to a boil. Simmer for about 1 hour to make a nice broth.
            Season with a generous amount of salt, and just enough saffron to make a nice yellow color. Season with thyme and rosemary if desired. The goal is to make a rich tasting broth that will soak into the rice to make it delicious. Stir in half as much rice as the amount of water in the pan. Cover, reduce heat to low, and simmer until all of the liquid has been absorbed, about 20 minutes.",
                'image' => "paella-valenciana.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Spain"],
                'ingredients' => [[1, "tablespoon", "olive oil"], [0.5, null, "chicken"], [0.5, null, "rabbit"], [10, "cloves", "garlic"], [1, null, "tomato"], [1, null, "tomato"], [1, "can", "butter beans"], [300, "g", "frozen green peas"], [300, "g", "frozen green beans"], [null, null, "salt"], [null, null, "mild paprika"], [1, "pinch", "saffron threads"], [1, "pinch", "dried thyme"], [1, "pinch", "dried rosemary"], [4, "cups", "white rice"]]
            ], [
                'name' => "Gazpacho",
                'instructions' => "Place the cucumber, peppers, tomatoes, garlic and spring onions in a large bowl. Add the bread and season well with salt and pepper. Add the sherry vinegar and a couple of tablespoons of olive oil and mix together with your hands, pressing down to squeeze out the juices. Cover and chill. Leave to marinade for at least 30 mins or overnight.
            Put the vegetable mixture into a blender and whiz until smooth. Check the consistency. If it is still rather thick and not very rich, add another glug or two of olive oil until you reach a consistency you like. Taste and adjust the seasoning as necessary. You might need a little more vinegar. Cover and chill again, until really cold and you’re ready to serve.
            To serve, stir the gazpacho and taste again as the seasoning may have changed as the soup is now very cold. Adjust as necessary, then serve ice cold with gazpacho ice cubes, sprinkled with chopped basil, an extra drizzle of olive oil and the toasts alongside, if using.",
                'image' => "gazpacho.jpg",
                'isVegan' => true,
                'isVegeterian' => true,
                'isLactoseFree' => true,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Spain"],
                'ingredients' => [[1, null, "cucumber"], [1, null, "red pepper"], [1, null, "green pepper"], [1, "kg", "plum tomatoes"], [2, "cloves", "garlic"], [2, null, "spring onions"], [2, "tablespoons", "sherry vinegar"]]
            ], [
                'name' => "Boeuf Bourguignon",
                'instructions' => "Pre-heat oven to 180°C (350°F)
            Start with the vegetables: chop the carrots in 1 cm pieces and the onion finely
            Dry the beef cubes with paper towel and sprinkle with salt and pepper
            In a pan, heat some oil and add the beef pieces. Braise meat for 5 minutes and add the chopped vegetables
            Stir for a few minutes, while you prepare the “bouquet garni” by arranging the herbs in a neat stack, one on top of the other, and then tie the ingredients into a tight bundle with string.
            Add the flour and continue to stir
            Transfer to a Dutch oven (casserole dish)
            Add the wine, the beef stock.the finely chopped garlic and the “bouquet garni”
            Cook in the oven for around 2 hours
            In the meantime, cook the pearl onions (until golden but still firm) and mushrooms separately
            Add the pearl onions and mushrooms to the beef stew once it is cooked. Remove the 'bouquet garni'
            Best served with egg pasta (tagliatelle), mashed or boiled potatoes",
                'image' => "gazpacho.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["France"],
                'ingredients' => [[1, "kg", " beef"], [1, null, "carrots"], [1, null, "onion"], [30, "g", "flour"], [2, "cloves", "garlic"], [40, "cl", "red wine"], [40, "cl", "beef stock"], [null, null, "vegetable oil"], [null, null, "black pepper"], [150, "g", "mushrooms"], [150, "g", "pearl onions"], [250, "g", "bacon"], [null, null, "'Bouquet garni'"], [2, "sprigs", "fresh thyme"], [2, "leaves", "'dried bay"], [2, "stalks", "leafy greens from the celery stalks"], [6, "sprigs", "fresh parsley"]]
            ], [
                'name' => "Lobster Bisque",
                'instructions' => "Gather the ingredients.
            Melt the butter in a large pan, once melted add the flour, a pinch of salt and pepper and the paprika. Stir well. 
            Slowly whisk in the milk, followed by the chicken stock, the white wine, and continue stirring until a smooth and slightly thickened to a cream-like consistency. (This stirring can take several minutes but spending the time at this stage of the bisque is critical to the success of the dish. Be careful not to let the mixture boil as this may cause the bisque to curdle.) 
            Add the onion, the carrots and simmer (again, do not boil) for 10 minutes. Add the cooked lobster meat and stir. Taste the bisque and adjust the seasoning to your liking. 
            Stir in the Cognac and finally, the cream. Heat through until piping hot. 
            Serve in hot bowls with a crusty baguette on the side. 
            Enjoy! ",
                'image' => "Lobster-Bisque.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["France"],
                'ingredients' => [[6, "tablespoons", "butter"], [6, "tablespoons", "flour"], [1, "teaspoon", "salt"], [null, null, "black pepper"], [1, "teaspoon", "paprika"], [4, "cups", "milk"], [1, "cups", "chicken stock"], [1, "dl", "white wine"], [3, "tablespoons", "onion"], [3, "tablespoons", "carrot"], [3, "cups", "cooked lobster meat"], [1, "tablespoon", "Cognac"], [0.5, "cup", "heavy cream"]]
            ], [
                'name' => "Lobster Bisque",
                'instructions' => "Gather the ingredients.
            Melt the butter in a large pan, once melted add the flour, a pinch of salt and pepper and the paprika. Stir well. 
            Slowly whisk in the milk, followed by the chicken stock, the white wine, and continue stirring until a smooth and slightly thickened to a cream-like consistency. (This stirring can take several minutes but spending the time at this stage of the bisque is critical to the success of the dish. Be careful not to let the mixture boil as this may cause the bisque to curdle.) 
            Add the onion, the carrots and simmer (again, do not boil) for 10 minutes. Add the cooked lobster meat and stir. Taste the bisque and adjust the seasoning to your liking. 
            Stir in the Cognac and finally, the cream. Heat through until piping hot. 
            Serve in hot bowls with a crusty baguette on the side. 
            Enjoy! ",
                'image' => "Lobster-Bisque.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["France"],
                'ingredients' => [[6, "tablespoons", "butter"], [6, "tablespoons", "flour"], [1, "teaspoon", "salt"], [null, null, "black pepper"], [1, "teaspoon", "paprika"], [4, "cups", "milk"], [1, "cups", "chicken stock"], [1, "dl", "white wine"], [3, "tablespoons", "onion"], [3, "tablespoons", "carrot"], [3, "cups", "cooked lobster meat"], [1, "tablespoon", "Cognac"], [0.5, "cup", "heavy cream"]]
            ]
        ];
    }

    public static function getCountries()
    {
        return [
            ["name" => "Afghanistan", "flag" => "AF.png"],
            ["name" => "Åland Islands", "flag" => "AX.png"],
            ["name" => "Albania", "flag" => "AL.png"],
            ["name" => "Algeria", "flag" => "DZ.png"],
            ["name" => "American Samoa", "flag" => "AS.png"],
            ["name" => "Andorra", "flag" => "AD.png"],
            ["name" => "Angola", "flag" => "AO.png"],
            ["name" => "Anguilla", "flag" => "AI.png"],
            ["name" => "Antarctica", "flag" => "AQ.png"],
            ["name" => "Antigua and Barbuda", "flag" => "AG.png"],
            ["name" => "Argentina", "flag" => "AR.png"],
            ["name" => "Armenia", "flag" => "AM.png"],
            ["name" => "Aruba", "flag" => "AW.png"],
            ["name" => "Australia", "flag" => "AU.png"],
            ["name" => "Austria", "flag" => "AT.png"],
            ["name" => "Azerbaijan", "flag" => "AZ.png"],
            ["name" => "Bahamas", "flag" => "BS.png"],
            ["name" => "Bahrain", "flag" => "BH.png"],
            ["name" => "Bangladesh", "flag" => "BD.png"],
            ["name" => "Barbados", "flag" => "BB.png"],
            ["name" => "Belarus", "flag" => "BY.png"],
            ["name" => "Belgium", "flag" => "BE.png"],
            ["name" => "Belize", "flag" => "BZ.png"],
            ["name" => "Benin", "flag" => "BJ.png"],
            ["name" => "Bermuda", "flag" => "BM.png"],
            ["name" => "Bhutan", "flag" => "BT.png"],
            ["name" => "Bolivia", "flag" => "BO.png"],
            ["name" => "Bosnia and Herzegovina", "flag" => "BA.png"],
            ["name" => "Botswana", "flag" => "BW.png"],
            ["name" => "Bouvet Island", "flag" => "BV.png"],
            ["name" => "Brazil", "flag" => "BR.png"],
            ["name" => "British Indian Ocean Territory", "flag" => "IO.png"],
            ["name" => "Brunei Darussalam", "flag" => "BN.png"],
            ["name" => "Bulgaria", "flag" => "BG.png"],
            ["name" => "Burkina Faso", "flag" => "BF.png"],
            ["name" => "Burundi", "flag" => "BI.png"],
            ["name" => "Cambodia", "flag" => "KH.png"],
            ["name" => "Cameroon", "flag" => "CM.png"],
            ["name" => "Canada", "flag" => "CA.png"],
            ["name" => "Cape Verde", "flag" => "CV.png"],
            ["name" => "Cayman Islands", "flag" => "KY.png"],
            ["name" => "Central African Republic", "flag" => "CF.png"],
            ["name" => "Chad", "flag" => "TD.png"],
            ["name" => "Chile", "flag" => "CL.png"],
            ["name" => "China", "flag" => "CN.png"],
            ["name" => "Christmas Island", "flag" => "CX.png"],
            ["name" => "Cocos (Keeling) Islands", "flag" => "CC.png"],
            ["name" => "Colombia", "flag" => "CO.png"],
            ["name" => "Comoros", "flag" => "KM.png"],
            ["name" => "Congo", "flag" => "CG.png"],
            ["name" => "Congo, The Democratic Republic of the", "flag" => "CD.png"],
            ["name" => "Cook Islands", "flag" => "CK.png"],
            ["name" => "Costa Rica", "flag" => "CR.png"],
            ["name" => "Cote D'Ivoire", "flag" => "CI.png"],
            ["name" => "Croatia", "flag" => "HR.png"],
            ["name" => "Cuba", "flag" => "CU.png"],
            ["name" => "Cyprus", "flag" => "CY.png"],
            ["name" => "Czech Republic", "flag" => "CZ.png"],
            ["name" => "Denmark", "flag" => "DK.png"],
            ["name" => "Djibouti", "flag" => "DJ.png"],
            ["name" => "Dominica", "flag" => "DM.png"],
            ["name" => "Dominican Republic", "flag" => "DO.png"],
            ["name" => "Ecuador", "flag" => "EC.png"],
            ["name" => "Egypt", "flag" => "EG.png"],
            ["name" => "El Salvador", "flag" => "SV.png"],
            ["name" => "Equatorial Guinea", "flag" => "GQ.png"],
            ["name" => "Eritrea", "flag" => "ER.png"],
            ["name" => "Estonia", "flag" => "EE.png"],
            ["name" => "Ethiopia", "flag" => "ET.png"],
            ["name" => "Falkland Islands (Malvinas)", "flag" => "FK.png"],
            ["name" => "Faroe Islands", "flag" => "FO.png"],
            ["name" => "Fiji", "flag" => "FJ.png"],
            ["name" => "Finland", "flag" => "FI.png"],
            ["name" => "France", "flag" => "FR.png"],
            ["name" => "French Guiana", "flag" => "GF.png"],
            ["name" => "French Polynesia", "flag" => "PF.png"],
            ["name" => "French Southern Territories", "flag" => "TF.png"],
            ["name" => "Gabon", "flag" => "GA.png"],
            ["name" => "Gambia", "flag" => "GM.png"],
            ["name" => "Georgia", "flag" => "GE.png"],
            ["name" => "Germany", "flag" => "DE.png"],
            ["name" => "Ghana", "flag" => "GH.png"],
            ["name" => "Gibraltar", "flag" => "GI.png"],
            ["name" => "Greece", "flag" => "GR.png"],
            ["name" => "Greenland", "flag" => "GL.png"],
            ["name" => "Grenada", "flag" => "GD.png"],
            ["name" => "Guadeloupe", "flag" => "GP.png"],
            ["name" => "Guam", "flag" => "GU.png"],
            ["name" => "Guatemala", "flag" => "GT.png"],
            ["name" => "Guernsey", "flag" => "GG.png"],
            ["name" => "Guinea", "flag" => "GN.png"],
            ["name" => "Guinea-Bissau", "flag" => "GW.png"],
            ["name" => "Guyana", "flag" => "GY.png"],
            ["name" => "Haiti", "flag" => "HT.png"],
            ["name" => "Heard Island and Mcdonald Islands", "flag" => "HM.png"],
            ["name" => "Holy See (Vatican City State)", "flag" => "VA.png"],
            ["name" => "Honduras", "flag" => "HN.png"],
            ["name" => "Hong Kong", "flag" => "HK.png"],
            ["name" => "Hungary", "flag" => "HU.png"],
            ["name" => "Iceland", "flag" => "IS.png"],
            ["name" => "India", "flag" => "IN.png"],
            ["name" => "Indonesia", "flag" => "ID.png"],
            ["name" => "Iran, Islamic Republic Of", "flag" => "IR.png"],
            ["name" => "Iraq", "flag" => "IQ.png"],
            ["name" => "Ireland", "flag" => "IE.png"],
            ["name" => "Isle of Man", "flag" => "IM.png"],
            ["name" => "Israel", "flag" => "IL.png"],
            ["name" => "Italy", "flag" => "IT.png"],
            ["name" => "Jamaica", "flag" => "JM.png"],
            ["name" => "Japan", "flag" => "JP.png"],
            ["name" => "Jersey", "flag" => "JE.png"],
            ["name" => "Jordan", "flag" => "JO.png"],
            ["name" => "Kazakhstan", "flag" => "KZ.png"],
            ["name" => "Kenya", "flag" => "KE.png"],
            ["name" => "Kiribati", "flag" => "KI.png"],
            ["name" => "Korea, Democratic People'S Republic of", "flag" => "KP.png"],
            ["name" => "Korea, Republic of", "flag" => "KR.png"],
            ["name" => "Kuwait", "flag" => "KW.png"],
            ["name" => "Kyrgyzstan", "flag" => "KG.png"],
            ["name" => "Lao People'S Democratic Republic", "flag" => "LA.png"],
            ["name" => "Latvia", "flag" => "LV.png"],
            ["name" => "Lebanon", "flag" => "LB.png"],
            ["name" => "Lesotho", "flag" => "LS.png"],
            ["name" => "Liberia", "flag" => "LR.png"],
            ["name" => "Libyan Arab Jamahiriya", "flag" => "LY.png"],
            ["name" => "Liechtenstein", "flag" => "LI.png"],
            ["name" => "Lithuania", "flag" => "LT.png"],
            ["name" => "Luxembourg", "flag" => "LU.png"],
            ["name" => "Macao", "flag" => "MO.png"],
            ["name" => "Macedonia, The Former Yugoslav Republic of", "flag" => "MK.png"],
            ["name" => "Madagascar", "flag" => "MG.png"],
            ["name" => "Malawi", "flag" => "MW.png"],
            ["name" => "Malaysia", "flag" => "MY.png"],
            ["name" => "Maldives", "flag" => "MV.png"],
            ["name" => "Mali", "flag" => "ML.png"],
            ["name" => "Malta", "flag" => "MT.png"],
            ["name" => "Marshall Islands", "flag" => "MH.png"],
            ["name" => "Martinique", "flag" => "MQ.png"],
            ["name" => "Mauritania", "flag" => "MR.png"],
            ["name" => "Mauritius", "flag" => "MU.png"],
            ["name" => "Mayotte", "flag" => "YT.png"],
            ["name" => "Mexico", "flag" => "MX.png"],
            ["name" => "Micronesia, Federated States of", "flag" => "FM.png"],
            ["name" => "Moldova, Republic of", "flag" => "MD.png"],
            ["name" => "Monaco", "flag" => "MC.png"],
            ["name" => "Mongolia", "flag" => "MN.png"],
            ["name" => "Montenegro", "flag" => "ME.png"],
            ["name" => "Montserrat", "flag" => "MS.png"],
            ["name" => "Morocco", "flag" => "MA.png"],
            ["name" => "Mozambique", "flag" => "MZ.png"],
            ["name" => "Myanmar", "flag" => "MM.png"],
            ["name" => "Namibia", "flag" => "NA.png"],
            ["name" => "Nauru", "flag" => "NR.png"],
            ["name" => "Nepal", "flag" => "NP.png"],
            ["name" => "Netherlands", "flag" => "NL.png"],
            ["name" => "Netherlands Antilles", "flag" => "AN.png"],
            ["name" => "New Caledonia", "flag" => "NC.png"],
            ["name" => "New Zealand", "flag" => "NZ.png"],
            ["name" => "Nicaragua", "flag" => "NI.png"],
            ["name" => "Niger", "flag" => "NE.png"],
            ["name" => "Nigeria", "flag" => "NG.png"],
            ["name" => "Niue", "flag" => "NU.png"],
            ["name" => "Norfolk Island", "flag" => "NF.png"],
            ["name" => "Northern Mariana Islands", "flag" => "MP.png"],
            ["name" => "Norway", "flag" => "NO.png"],
            ["name" => "Oman", "flag" => "OM.png"],
            ["name" => "Pakistan", "flag" => "PK.png"],
            ["name" => "Palau", "flag" => "PW.png"],
            ["name" => "Palestinian Territory, Occupied", "flag" => "PS.png"],
            ["name" => "Panama", "flag" => "PA.png"],
            ["name" => "Papua New Guinea", "flag" => "PG.png"],
            ["name" => "Paraguay", "flag" => "PY.png"],
            ["name" => "Peru", "flag" => "PE.png"],
            ["name" => "Philippines", "flag" => "PH.png"],
            ["name" => "Pitcairn", "flag" => "PN.png"],
            ["name" => "Poland", "flag" => "PL.png"],
            ["name" => "Portugal", "flag" => "PT.png"],
            ["name" => "Puerto Rico", "flag" => "PR.png"],
            ["name" => "Qatar", "flag" => "QA.png"],
            ["name" => "Reunion", "flag" => "RE.png"],
            ["name" => "Romania", "flag" => "RO.png"],
            ["name" => "Russian Federation", "flag" => "RU.png"],
            ["name" => "RWANDA", "flag" => "RW.png"],
            ["name" => "Saint Helena", "flag" => "SH.png"],
            ["name" => "Saint Kitts and Nevis", "flag" => "KN.png"],
            ["name" => "Saint Lucia", "flag" => "LC.png"],
            ["name" => "Saint Pierre and Miquelon", "flag" => "PM.png"],
            ["name" => "Saint Vincent and the Grenadines", "flag" => "VC.png"],
            ["name" => "Samoa", "flag" => "WS.png"],
            ["name" => "San Marino", "flag" => "SM.png"],
            ["name" => "Sao Tome and Principe", "flag" => "ST.png"],
            ["name" => "Saudi Arabia", "flag" => "SA.png"],
            ["name" => "Senegal", "flag" => "SN.png"],
            ["name" => "Serbia", "flag" => "RS.png"],
            ["name" => "Seychelles", "flag" => "SC.png"],
            ["name" => "Sierra Leone", "flag" => "SL.png"],
            ["name" => "Singapore", "flag" => "SG.png"],
            ["name" => "Slovakia", "flag" => "SK.png"],
            ["name" => "Slovenia", "flag" => "SI.png"],
            ["name" => "Solomon Islands", "flag" => "SB.png"],
            ["name" => "Somalia", "flag" => "SO.png"],
            ["name" => "South Africa", "flag" => "ZA.png"],
            ["name" => "South Georgia and the South Sandwich Islands", "flag" => "GS.png"],
            ["name" => "Spain", "flag" => "ES.png"],
            ["name" => "Sri Lanka", "flag" => "LK.png"],
            ["name" => "Sudan", "flag" => "SD.png"],
            ["name" => "Sur[iname", "flag" => "SR.png"],
            ["name" => "Svalbard and Jan Mayen", "flag" => "SJ.png"],
            ["name" => "Swaziland", "flag" => "SZ.png"],
            ["name" => "Sweden", "flag" => "SE.png"],
            ["name" => "Switzerland", "flag" => "CH.png"],
            ["name" => "Syrian Arab Republic", "flag" => "SY.png"],
            ["name" => "Taiwan, Province of China", "flag" => "TW.png"],
            ["name" => "Tajikistan", "flag" => "TJ.png"],
            ["name" => "Tanzania, United Republic of", "flag" => "TZ.png"],
            ["name" => "Thailand", "flag" => "TH.png"],
            ["name" => "Timor-Leste", "flag" => "TL.png"],
            ["name" => "Togo", "flag" => "TG.png"],
            ["name" => "Tokelau", "flag" => "TK.png"],
            ["name" => "Tonga", "flag" => "TO.png"],
            ["name" => "Trinidad and Tobago", "flag" => "TT.png"],
            ["name" => "Tunisia", "flag" => "TN.png"],
            ["name" => "Turkey", "flag" => "TR.png"],
            ["name" => "Turkmenistan", "flag" => "TM.png"],
            ["name" => "Turks and Caicos Islands", "flag" => "TC.png"],
            ["name" => "Tuvalu", "flag" => "TV.png"],
            ["name" => "Uganda", "flag" => "UG.png"],
            ["name" => "Ukraine", "flag" => "UA.png"],
            ["name" => "United Arab Emirates", "flag" => "AE.png"],
            ["name" => "United Kingdom", "flag" => "GB.png"],
            ["name" => "United States", "flag" => "US.png"],
            ["name" => "United States Minor Outlying Islands", "flag" => "UM.png"],
            ["name" => "Uruguay", "flag" => "UY.png"],
            ["name" => "Uzbekistan", "flag" => "UZ.png"],
            ["name" => "Vanuatu", "flag" => "VU.png"],
            ["name" => "Venezuela", "flag" => "VE.png"],
            ["name" => "Viet Nam", "flag" => "VN.png"],
            ["name" => "Virgin Islands, British", "flag" => "VG.png"],
            ["name" => "Virgin Islands, U.S.", "flag" => "VI.png"],
            ["name" => "Wallis and Futuna", "flag" => "WF.png"],
            ["name" => "Western Sahara", "flag" => "EH.png"],
            ["name" => "Yemen", "flag" => "YE.png"],
            ["name" => "Zambia", "flag" => "ZM.png"],
            ["name" => "Zimbabwe", "flag" => "ZW.png"]
        ];
    }
}
