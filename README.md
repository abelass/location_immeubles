# Location d'immeubles
Location d'immeubles

Plugins qui assembles divers plugins tiers et propose de squelettes pour permettre de gérer la location d'immeubles

## Introduction
Ce plugin propose une solution de location d'espaces habitables. Il se base sur l'hypothèse
qu'un [immeuble](https://github.com/abelass/immeubles) dispose de plusieurs [espaces](https://github.com/abelass/espaces) à louer.

Donc on a un immeuble qui contient les informations générales, puis ces différents espaces
avec leur propre charactéristique comme le [prix de vente](https://github.com/abelass/prix_objets_periodes) et les
[dates disponibles](https://github.com/abelass/objets_disponibilites) de l'espace.

Si cela est trop complexe, on peut s'en passer des espaces et uniquement utiliser
les immeubles.

## Champs

Les deux plugins espaces et immeubles contiennent volontairement peu de champs.
Afin d'ajouter des infos additionels utilisez le plugin [Infos extras pour objets](https://github.com/abelass/objets_infos_extras).

## Services extras
Si voulez ajouter des services extras à louer, faites le via le plugin [objets_services_extras](https://github.com/abelass/objets_services_extras).

## Nécessaires
- [location_objets](https://github.com/abelass/location_objets)
- [objets_infos_extras](https://github.com/abelass/objets_infos_extras)
- [objets_services_extras](https://github.com/abelass/objets_services_extras)
- [immeubles](https://github.com/abelass/immeubles)
- [espaces](https://github.com/abelass/espaces)

### Location
Les squelettes des objets "immeubles" et "espaces" contiennent un lien vers la
page de location respective.

