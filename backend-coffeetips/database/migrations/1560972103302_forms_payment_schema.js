'use strict'

/** @type {import('@adonisjs/lucid/src/Schema')} */
const Schema = use('Schema')

class FormsPaymentSchema extends Schema {
  up () {
    this.create('forms_payments', (table) => {
      table.increments()
      table.integer('store_id')
        .unsigned()
        .notNullable()
        .references("id")
        .inTable("stores")
        .onUpdate("CASCADE")
        .onDelete("CASCADE")

        table.integer("payment_id")
      table.timestamps()
    })
  }

  down () {
    this.drop('forms_payments')
  }
}

module.exports = FormsPaymentSchema
