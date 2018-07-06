@extends('layouts.app')
@section('content')
<h1 class="text-center">Accountancy</h1>
<div class="tableaux text-center">
    <table>
            <tr>
                <th>
                    Idea 1
                </th>

            </tr>
        <tr>
            <th>Date</th>
            <th>Wording</th>
            <th>Debit</th>
            <th>Credit</th>
            <th>Balance</th>
        </tr>

        <tr>
            <td>06/07/18</td>
            <td>Purchaise 3D printer</td>
            <td></td>
            <td>-500 €</td>
            <td>-500 €</td>
        </tr>

        <tr>
            <td>16/08/18</td>
            <td>Purchaise software 3D printer</td>
            <td></td>
            <td>-400 €</td>
            <td>-900 €</td>
        </tr>
    </table>
</div>
<br><br> <br>
<div class="tableaux text-center">
        <table>
                <tr>
                    <th>
                        Idea 2
                    </th>
    
                </tr>
            <tr>
                <th>Date</th>
                <th>Wording</th>
                <th>Debit</th>
                <th>Credit</th>
                <th>Balance</th>
            </tr>
    
            <tr>
                <td>15/06/18</td>
                <td>Purchaise of a book "Concevez des applications avec React Native. <br>
                Développement, publications sur les stores et stratégies marketing." </td>
                <td></td>
                <td>-50 €</td>
                <td>-50 €</td>
            </tr>
        </table>
@endsection
<style>
table, th, td {
    border: 1px solid black;
}
.tableaux{
    display:inline-block;
    vertical-align:top;
}
</style>