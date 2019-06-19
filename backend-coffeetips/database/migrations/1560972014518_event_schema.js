'use strict'

/** @type {import('@adonisjs/lucid/src/Schema')} */
const Schema = use('Schema')

class EventSchema extends Schema {
  up () {
    this.create('events', (table) => {
      table.increments()
      table.integer('store_id')
        .unsigned()
        .notNullable()
        .references("id")
        .inTable("stores")
        .onUpdate("CASCADE")
        .onDelete("CASCADE")

      table.string('name', 100)
      table.string('date', 10)
      table.string('hour', 5)
      table.string('local', 100)
      table.string('description', 250)
      table.integer('qtdPeople')
      table.string('price', 20)
      table.timestamps()
    })
  }

  down () {
    this.drop('events')
  }
}

module.exports = EventSchema
