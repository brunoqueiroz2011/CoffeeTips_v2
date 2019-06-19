'use strict'

/** @type {import('@adonisjs/lucid/src/Schema')} */
const Schema = use('Schema')

class StoreSchema extends Schema {
  up () {
    this.create('stores', (table) => {
      table.increments()
      table.string('email', 254).notNullable().unique()
      table.string('password', 60).notNullable()
      table.string('name', 100).notNullable()
      table.string('description', 140).nullable()
      table.string('neighborhood', 100).nullable()
      table.string('address', 100).nullable()
      table.string('schedule', 100).nullable()
      table.string('telephone', 100).nullable()
      table.string('instagram', 100).nullable()
      table.string('facebook', 100).nullable()
      table.string('logoPath', 100).notNullable()
      table.timestamps()
    })
  }

  down () {
    this.drop('stores')
  }
}

module.exports = StoreSchema
