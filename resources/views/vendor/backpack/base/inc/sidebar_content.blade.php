{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('pathologie') }}"><i class="nav-icon la la-question"></i>
        Pathologies</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('medicament') }}"><i class="nav-icon la la-question"></i>
        Medicaments</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-question"></i>
        Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('patient') }}"><i class="nav-icon la la-question"></i>
        Patients</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dossier') }}"><i class="nav-icon la la-question"></i>
        Dossiers</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('consultation') }}"><i
            class="nav-icon la la-question"></i> Consultations</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('rendez-vou') }}"><i class="nav-icon la la-question"></i>
        Rendez vous</a></li>
