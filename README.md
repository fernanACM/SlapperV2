# SlapperV2
### New fixed version of SlapperV2: Bug fixes in slapperV2
_________________________________________________________________________________________

### Update dashboard
| Version | Phar Download |	Zip Download | API Stable | mcpe-protocol |  
|-------|-------------|-------------|-----------|-------|
| 4.0.1 | [Poggit](https://poggit.pmmp.io/r/138705/SlapperV2_dev-30.phar) | [GitHub](https://github.com/fernanACM/SlapperV2/archive/refs/heads/main.zip) |3.22.2| 448 |
__________________________________________________________________________________________
### How to use SlapperV2?
* It is very easy, you just have to put: '/slapper help', there they will give you the necessary information.
-------------------------------------------------------------------------------------------------------------
### How to install SlapperV2?
1.- [Download](https://poggit.pmmp.io/r/138705/SlapperV2_dev-30.phar) 
the current version of SlapperV2.
2.- Move dowloaded file to your server /plugins/ folder
3.- Restart the server
-------------------------------------------------------------------------------------------------------------
### Commands
* They are going to execute the command '/slapper help':

/slapper help
* Spawn Slapper 

/slapper spawn (human/entity) (name)

* Remove Slapper

/slapper remove (id)

* Id Slapper
             --------------------
/slapper id  |(Play the slapper)|
            
* Remove Slapper

/slapper remove (id)

* Edit Slapper
              ---------------
/slapper edit |List commands|
            
/slapper edit (id) name ExampleClick{line}subtitle  |{line} = Subtitle|
                            ---------------------------------------------------------                       
/slapper edit (id) scale 2  |small scale: 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9|

-----------------------------------------------------------------
|large scale: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15.|
                          
                        --------------------    
/slapper edit (id) skin |(Play the slapper)|
                    
* Add commands

/slapper edit (id) addcmd rca {player} (command)

* Remove commands 

/slapper edit (id) delcmd rca {player} (command)
***
 ### List Entities 
 const ENTITY_TYPES = [
        "Chicken", "Pig", "Sheep", "Cow",
        "MushroomCow", "Wolf", "Enderman", "Spider",
        "Skeleton", "PigZombie", "Creeper", "Slime",
        "Silverfish", "Villager", "Zombie", "Human",
        "Bat", "CaveSpider", "LavaSlime", "Ghast",
        "Ocelot", "Blaze", "ZombieVillager", "Snowman",
        "Minecart", "FallingSand", "Boat", "PrimedTNT",
        "Horse", "Donkey", "Mule", "SkeletonHorse",
        "ZombieHorse", "Witch", "Rabbit", "Stray",
        "Husk", "WitherSkeleton", "IronGolem", "Snowman",
        "LavaSlime", "Squid", "ElderGuardian", "Endermite",
        "Evoker", "Guardian", "PolarBear", "Shulker",
        "Vex", "Vindicator", "Wither", "Llama"
    ];
       
    ### List of entities without code
    
        "Chicken", "Pig", "Sheep", "Cow",
        "MushroomCow", "Wolf", "Enderman", "Spider",
        "Skeleton", "PigZombie", "Creeper", "Slime",
        "Silverfish", "Villager", "Zombie", "Human",
        "Bat", "CaveSpider", "LavaSlime", "Ghast",
        "Ocelot", "Blaze", "ZombieVillager", "Snowman",
        "Minecart", "FallingSand", "Boat", "PrimedTNT",
        "Horse", "Donkey", "Mule", "SkeletonHorse",
        "ZombieHorse", "Witch", "Rabbit", "Stray",
        "Husk", "WitherSkeleton", "IronGolem", "Snowman",
        "LavaSlime", "Squid", "ElderGuardian", "Endermite",
        "Evoker", "Guardian", "PolarBear", "Shulker",
        "Vex", "Vindicator", "Wither", "Llama"
