select cat.name, owner.first, owner.last
from own
         join cat on own.catid = cat.id
         join owner on owner.id = own.ownerid
where cat.name in
      (
          select cat.name
          from own
                   join cat on own.catid = cat.id
                   join owner on owner.id = own.ownerid
          group by cat.name
          having count(cat.name) > 1
      )

order by cat.name, owner.first, owner.last