@extends('emails.layouts.default')

@section('content')
  <p>Olá, {{ $user -> first_name }}.</p>

  <p>
    Seja bem-vindo ao {{ config('app.name') }}.
  </p>

  <p>
    Por favor, clique no botão abaixo para confirmar a sua conta.
  </p>

  <table
    border="0"
    cellpadding="0"
    cellspacing="0"
    role="presentation"
    class="btn btn-primary"
  >
    <tbody>
      <tr>
        <td align="left">
          <table
            border="0"
            cellpadding="0"
            cellspacing="0"
            role="presentation"
          >
            <tbody>
              <tr>
                <td>
                  <a
                    target="_blank"
                    href="http://htmlemail.io"
                  >
                    Confirmar conta
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
@endsection