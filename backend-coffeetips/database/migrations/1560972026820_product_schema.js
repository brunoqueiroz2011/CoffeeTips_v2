'use strict'

/** @type {import('@adonisjs/lucid/src/Schema')} */
const Schema = use('Schema')

class ProductSchema extends Schema {
  up () {
    this.create('products', (table) => {
      table.increments()
      table.integer('store_id')
        .unsigned()
        .notNullable()
        .references("id")
        .inTable("stores")
        .onUpdate("CASCADE")
        .onDelete("CASCADE")

      table.string('name', 100)
      table.string('ingredients', 100)
      table.string('price', 20)
      table.integer('status')
      table.timestamps()
    })
  }

  down () {
    this.drop('products')
  }
}

module.exports = ProductSchema
