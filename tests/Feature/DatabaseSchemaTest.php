<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class DatabaseSchemaTest extends TestCase
{
    use RefreshDatabase;

    public function test_domain_tables_have_expected_columns(): void
    {
        $this->assertTrue(Schema::hasColumns('customers', ['id', 'name']));
        $this->assertTrue(Schema::hasColumns('orders', ['id', 'date', 'customer_id']));
        $this->assertTrue(Schema::hasColumns('products', ['id', 'description', 'price']));
        $this->assertTrue(Schema::hasColumns('order_product', ['id', 'order_id', 'product_id', 'amount']));
    }

    public function test_orders_table_has_a_customer_foreign_key(): void
    {
        $foreignKeys = collect(DB::select("PRAGMA foreign_key_list('orders')"));

        $this->assertTrue($foreignKeys->contains(
            fn (object $foreignKey): bool => $foreignKey->table === 'customers'
                && $foreignKey->from === 'customer_id'
                && $foreignKey->to === 'id'
        ));
    }

    public function test_order_product_table_has_foreign_keys_for_orders_and_products(): void
    {
        $foreignKeys = collect(DB::select("PRAGMA foreign_key_list('order_product')"));

        $this->assertTrue($foreignKeys->contains(
            fn (object $foreignKey): bool => $foreignKey->table === 'orders'
                && $foreignKey->from === 'order_id'
                && $foreignKey->to === 'id'
        ));

        $this->assertTrue($foreignKeys->contains(
            fn (object $foreignKey): bool => $foreignKey->table === 'products'
                && $foreignKey->from === 'product_id'
                && $foreignKey->to === 'id'
        ));
    }
}