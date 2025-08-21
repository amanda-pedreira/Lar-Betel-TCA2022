        drop database TCA__Lar_Betel;
        create database TCA__Lar_Betel;
		use TCA__Lar_Betel;
        
		create table assunto(
			id int auto_increment not null,
			assunto varchar(100) not null,
			constraint ASS_PK primary key(id)
		);

		create table contato(
			id int auto_increment not null,
			nome varchar(100) not null,
			email varchar(100) not null,
			tele int not null,
			assunto varchar(100) not null,
			mens varchar(200),
			constraint CONT_PK primary key(id)
		);

		create table contatoLido(
			id int auto_increment not null,
			nome varchar(100) not null,
			email varchar(100) not null,
			tele int not null,
			assunto varchar(100) not null,
			mens varchar(200),
			constraint CONTL_PK primary key(id)
		);

		insert into assunto (assunto) values ("Reclamação");
		insert into assunto (assunto) values ("Sugestão");
		insert into assunto (assunto) values ("Elogio");
		insert into assunto (assunto) values ("Dúvida");
		insert into assunto (assunto) values ("-- Mostrar Tudo --");

		insert into contato (nome, email, tele, assunto, mens) values ('Nicolás', 'nicolas@gmail.com', '7943434325', 'Elogio', 'Otimo atendimento');
		insert into contato (nome, email, tele, assunto, mens) values ('Pedro', 'goki@gmail.com', '279853433', 'Sugestão', 'Poderiam ter uma area de contato melhor');
		
		insert into contatoLido (nome, email, tele, assunto, mens) values ('Daniel', 'dandan@gmail.com', '947384322', 'Reclamação', 'Pior site q eu visitei na minha vida');
		insert into contatoLido (nome, email, tele, assunto, mens) values ('Lucas', 'knizz@gmail.com', '17984379843', 'Dúvida', 'Vcs atendem a partir de quantos anos?');
		

		delimiter //
		create procedure inserirContato(in pNome varchar(100), in pEmail varchar(100), in pTele int, pAssunto varchar(100), in pMens varchar(100))
		begin

			insert into contato (nome, email, tele, assunto, mens) values (pNome, pEmail, pTele, pAssunto,pMens);
			
			SET @count = 0;
			UPDATE contato SET contato.id = @count:= @count + 1;
			
		end;
		//

		delimiter //
		create procedure inserirContatoLido(in pId int)
		begin

			insert into contatoLido (nome, email, tele, assunto, mens)
			select nome, email, tele, assunto, mens
			from contato
			where id = pId;
            commit;
			
			delete from contato where id = pId;
            commit;
			
			set @count = 0;
			update contato set contato.id = @count:= @count + 1;
            alter table contato auto_increment = 1;
            commit;
				
		end;
		//

		delimiter //
		create procedure inserirContatoNLido(in pId int)
		begin

			insert into contato (nome, email, tele, assunto, mens)
			select nome, email, tele, assunto, mens
			from contatoLido
			WHERE id = pId;
            commit;
			
			delete from contatoLido where id = pId;
            commit;
			
			set @count = 0;
			update contatoLido set contatoLido.id = @count:= @count + 1;
            alter table contatoLido auto_increment = 1;
            /*truncate table contato;*/
			commit;
			
		end;
		//
        
		delimiter //
        create procedure deletarContatoNL (in pId int)
        begin
			delete from contato where id = pId;
            
            set @count = 0;
			update contato set contato.id = @count:= @count + 1;
			alter table contato auto_increment = 1;
			commit;
        end;
		//
        
        delimiter //
        create procedure deletarContatoL (in pId int)
        begin
			delete from contatoLido where id = pId;
            
			set @count = 0;
			update contatoLido set contatoLido.id = @count:= @count + 1;
			alter table contatoLido auto_increment = 1;
			commit;
        end;
		//
        
		delimiter //
		create procedure listarContato()
		begin
				select id, nome, email, tele, assunto, mens
				from contato
				commit;
		end
		//

		delimiter //
		create procedure listarContatoLido()
		begin
				select id, nome, email, tele, assunto, mens
				from contatoLido
				commit;
		end
		//
		
		delimiter //
		create procedure listarAssunto()
		begin

			select id, assunto
			from assunto
			commit;
			
		end
		//
		
		
