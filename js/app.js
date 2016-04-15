
            var app = angular.module( 'application' , [] );

            app.controller( 'controllerTablePerformers' , [ '$scope' , '$filter' , function( $scope , $filter){
                $scope.performers = [
  {
    "Name":"Philip Köster",
    "Category":"music",
    "Tags":"rock",
    "Popularity":6234
  },
  {
    "Name":"Victor Fernandez Lopez",
    "Category":"music",
    "Tags":"pop",
    "Popularity":6234
  },
  {
    "Name":"Jaeger Stone",
    "Category":"music",
    "Tags":"pop, rock, dance",
    "Popularity":6003
  },
  {
    "Name":"Thomas Traversa",
    "Category":"handycrafter",
    "Tags":"sculptures for a buck $",
    "Popularity":5855
  },
  {
    "Name":"Ricardo Campello",
    "Category":"dance",
    "Tags":"belly dancer",
    "Popularity":5789
  },
  {
    "Name":"Alex Mussolini",
    "Category":"dance",
    "Tags":"hip hop",
    "Popularity":5789
  },
  {
    "Name":"Marcilio \"Brawzinho\" Browne",
    "Category":"dance",
    "Tags":"breakdancers",
    "Popularity":5740
  },
  {
    "Name":"Robby Swift",
    "Category":"extreme",
    "Tags":"knife swollower",
    "Popularity":5509
  },
  {
    "Name":"Daniel Bruch",
    "Category":"circus",
    "Tags":"juggler",
    "Popularity":5443
  },
  {
    "Name":"Klaas Voget",
    "Category":"art",
    "Tags":"painter",
    "Popularity":5311
  }
]

}]);