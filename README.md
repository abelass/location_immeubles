# Location d'immeubles
Location d'immeubles

Plugins qui assembles divers plugins tiers et propose de squelettes pour permettre de gérer la location d'immeubles

## Introduction
Se plugin propose une solution de location d'espaces habitables. Il se base sur l'hypothèse
qu'un [immeuble](https://github.com/abelass/immeubles) dispose de plusieurs [espaces](https://github.com/abelass/espaces) à louer.

Donc on a l'immeuble qui contient les informations générales, puis les différents espaces
avec leur propre charactéristique ainsi que le [prix de vente](https://github.com/abelass/prix_objets_periodes) et les
[dates disponibles](https://github.com/abelass/objets_disponibilites) de l'espace.

Si cela est trop complexe, on peut s'en passer des espaces et uniquement utiliser
les immeubles.

Les deux plugin espaces et immeubles contiennent volontairement peu de champs.
Afin d'ajouter des infos additionels le plugin prévoit utiliser [Infos extras pour objets](https://github.com/abelass/objets_infos_extras)


## Nécessaires
- [location_objets](https://github.com/abelass/location_objets)
- [objets_infos_extras](https://github.com/abelass/objets_infos_extras)
- [objets_services_extras](https://github.com/abelass/objets_services_extras)
- [immeubles](https://github.com/abelass/immeubles)
- [espaces](https://github.com/abelass/espaces)

### Location
Les squelettes de base des objets immeubles et espaces contiennent un lien vers la
page de location respective

