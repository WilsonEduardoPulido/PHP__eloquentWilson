@extends('layouts.app')
@section('Titulo','Home')
    
@section('contenido')

<div class="container  bg-gradient-to-r from-cyan-500 to-blue-500 py-9 mx-auto">
    
 
  


      
  </div>

   
  <div class="container grid grid-cols-8  mx-auto">
       <div class="col-span-2 bg-red-500"> <div class="flex h-screen flex-col justify-between border-r bg-white">
    <div class="px-4 py-6">
      <span class="block h-10 w-32 rounded-lg bg-gray-200"></span>
  
      <nav aria-label="Main Nav" class="mt-6 flex flex-col space-y-1">
        <a
          href="#"
          class="flex items-center rounded-lg bg-gray-100 px-4 py-2 text-gray-700"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 opacity-75"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
            />
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
            />
          </svg>
  
          <span class="ml-3 text-sm font-medium"> General </span>
        </a>
  
        <details class="group">
          <summary
            class="flex cursor-pointer items-center rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 opacity-75"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
              />
            </svg>
  
            <span class="ml-3 text-sm font-medium hover:bg-blue-400"> Usuarios</span>
  
            <span
              class="ml-auto shrink-0 transition duration-300 group-open:-rotate-180"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                />
              </svg>
            </span>
          </summary>
  
          <nav aria-label="Teams Nav" class="mt-1.5 ml-8 flex flex-col">
            <a
              href="{{route('users.index')}}"
              class="flex items-center rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 opacity-75"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"
                />
              </svg>
  
           <span class="ml-3 text-sm font-medium ">   Listar Usuarios </span>
            
  
            <a
              href="#"
              class="flex items-center rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 opacity-75"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                />
              </svg>
  
              <span class="ml-3 text-sm font-medium"> Calendar </span>
            </a>
          </nav>
        </details>
  
        <a
          href="#"
          class="flex items-center rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 opacity-75"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
            />
          </svg>
  
          <span class="ml-3 text-sm font-medium"> Billing </span>
        </a>
  
        <a
          href="#"
          class="flex items-center rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 opacity-75"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"
            />
          </svg>
  
          <span class="ml-3 text-sm font-medium"> Invoices </span>
        </a>
  
        
      </nav>
    </div>
  
    
  </div>
  </div>
   
<div class="col-span-6    justify-center align-center" >
    <h1 class=" text-3xl font-bold text-center text-blue-600">Administrar Usuarios</h1>
   <a href="{{route('users.crear')}}" >  <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
 Crear Usuario 
</button></a>
    <table class="table-auto mt-10  mx-auto border border-gray-900">
        <thead class="bg-blue-700 text-white m-9 ">
          <tr>
           
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            
            <th>Eliminar</th>
            <th>Editar</th>
          </tr>
        </thead>
        <tbody class="border border-gray-200">
        @foreach ($usuarios as $usuario)
            <tr>
            
            <td class="w-1/6 text-center">{{$usuario->Nombre}}</td>
            <td class="w-1/6 text-center">{{$usuario->Apellido}}</td>
          
            <td class="w-1/6 text-center" >{{$usuario->Correo}}</td>
            
            
            <td class="w-1/3 text-center" >

          
           <form action="{{route('users.destroy',$usuario->id)}}" method="POST " >
           @csrf
           @method('delete')
                <button type="submit" class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                    Eliminar
                  </button>

                  </form>
            </td>
            <td class="w-1/3 text-center" >
             <a href="{{route('users.edit',$usuario->id)}}" >  <button class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                    Editar 
                  </button> </a>
            </td>
          </tr>
          
        @endforeach
          
          
        </tbody>
      </table>
  {{$usuarios->links()}}
  </div>
        
      
</div>


@endsection

