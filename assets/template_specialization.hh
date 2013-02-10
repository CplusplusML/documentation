template <typename N>
class Templated
{};

template <>
class Templated<Templated<int> >
{};
