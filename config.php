<?php

$SITE = array(
 'base_path' => '',
 'menu' => array(
  'index' => array(
    'title'    => 'C++ ML.org',
    'sections' => array(
      'home'       => 'Home'
    )
  ),
  'structs' => array(
    'title'    => 'Structures',
    'sections' => array(
      'class'     => 'Class',
      'struct'    => 'Struct',
      'union'     => 'Union',
      'enum'      => 'Enum',
      'literal'   => 'Literal',
      'typedef'   => 'Typedef',
      'namespace' => 'Namespace'
    )
  ),
  'templates' => array(
    'title'    => 'Templates',
    'sections' => array(
      'template_parameters' => 'Template parameters',
      'template_parameters_multiple' => 'Template parameters Multiple',
      'template_parameters_integer'  => 'Template parameters Integer',
      'template_alias'               => 'Template alias',
      'template_specialization'      => 'Template spelialization',
    )
  ),
  'datas' => array(
    'title'    => 'Data',
    'sections' => array(
      'global_data'        => 'Global data',
      'global_static_data' => 'Global static data',
      'const_data'         => 'Const data',
    )
  ),
  'functions' => array(
    'title'    => 'Functions',
    'sections' => array(
      'global_function'            => 'Global function',
      'global_static_function'     => 'Global static function',
      'function_parameter'         => 'Function parameter',
      'throw_function_qualifier'   => 'Throw function qualifier',
    )
  ),
  'member_datas' => array(
    'title'    => 'Member datas',
    'sections' => array(
      'member_data'                  => 'Member data',
      'public_member_data'           => 'Public member data',
      'protected_member_data'        => 'Protected member data',
      'private_member_data'          => 'Private member data',
      'const_member_data'            => 'Const member data',
      'volatile_member_data'         => 'Volatile member data',
      'static_member_data'           => 'Static member data',
      'static_const_member_data'     => 'Static const member data',
      'static_constexpr_member_data' => 'Static constexpr member data',
      'member_data_aggregation'      => 'Member data aggregation',
      'member_data_composition'      => 'Member data composition',
    )
  ),
  'member_functions' => array(
    'title'    => 'Member functions',
    'sections' => array(
      'member_function'                  => 'Member function',
      'public_member_function'           => 'Public member function',
      'protected_member_function'        => 'Protected member function',
      'private_member_function'          => 'Private member function',
      'deleted_member_function'          => 'Deleted member function',
      'defaulted_member_function'        => 'Defaulted member function',
      'const_member_function'            => 'Const member function',
      'constexpr_member_function'        => 'Constexpr member function',
      'inline_member_function'           => 'Inline member function',
      'static_member_function'           => 'Static member function',
      'static_constexpr_member_function' => 'Static constexpr member function',
      'virtual_member_function'          => 'Virtual member function',
      'pure_virtual_member_function'     => 'Pure virtual member function',
      'special_member_function'          => 'Special member function',
      'operator_member_function'         => 'Operator member function',
      'cast_operator_member_function'    => 'Cast operator member function'
    )
  ),
  'misc' => array(
    'title'    => 'Miscellaneous',
    'sections' => array(
      'dependency'                    => 'Dependency',
      'inheritance'                   => 'Inheritence',
      'public_inheritance'            => 'Public inheritence ',
      'public_inheritance_verbose'    => 'Public inheritence (verbose)',
      'protected_inheritance'         => 'Protected inheritence',
      'protected_inheritance_verbose' => 'Protected inheritence (verbose)',
      'private_inheritance'           => 'Private inheritence',
      'private_inheritance_verbose'   => 'Private inheritence (verbose)',
      'friendship'                    => 'Friendship',
      'nested_type'                   => 'Nested type',
      'default_values'                => 'Default values',
      'libraries'                     => 'Libraries',
      'extern'                        => 'Extern',
    )
   ),
  ),
);