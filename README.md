# F&H Simulator (Calculator)

IMPORTANT INFORMATION : THE VERSION THAT WAS TO BE HOSTED ONLINE DOESN'T WORK, ONLY BY DOWNLOADING THE SOURCE CODE AND BUILDING THE APP CAN YOU TRY IT ON YOUR MACHINE

__F&H Simulator__ is an online app inspired by aqiu384's Megaten Fusion Calculator and the official Fear & Hunger wiki (wiki.gg).
The goal of this project is ton replicate RPG Maker MV's data architectured on a normalized relational database while also compiling a lot of information about the game to facilitate coming up with new strategies.
The architecture of this app is a major aspect, alongside using Symfony's Doctrine ORM to manage data.

This version is a __prototype__ which sets out to have a functional back-office and to show a lot of information about this game's enemies.

/!\ WARNING : THIS PROJECT CONTAINS SEXUAL IMAGERY, althought it is censored. Don't go to the enemy page if those topics disturb you /!\

## Current progress of the project :
* Back-office (accessible by typing '/admin' in the path) : Completely operational (CRUD functional, all entities can be edited)
* Enemy page (accessible by typing '/enemy/{id}' in the path) : Mostly operational (a WIP which shows some information relative to the skills the enemy can use alongside basis properties like its HP
* Test data : WIP. Theres currenly very little info in the database

## Data specification :
A lot of entities and attributes can seem weird without knowledge of RPG Maker, but the most important ones to know about are :
* Effect : In RPGMaker, you can set up an attribute alongside a value depending on the attribute to most entities (equipment, weapon, limbs, status).
* Limb and Troop : A 'limb' is basically a singular enemy, and a 'troop' is a collection of enemies. In Fear & Hunger, limbs can attack you independantly from each other.

## Architecture specification :
This project has 4 main pages :
- The disclaimer page, entrypoint of the application
- The back office (where the CRUD is)
- The enemies list (accessible by typing '/enemy' in the path) which shows all the troops in the database
- The 'fight enemy' page ('/enemy/{id}') where you can see more attributes about an enemy. Currently there is only one enemy, of id = 1;
